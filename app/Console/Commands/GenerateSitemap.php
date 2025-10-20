<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/')
                ->setPriority(1.0)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY))
            ->add(Url::create('/tong-quan')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
            ->add(Url::create('/tien-ich')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
            ->add(Url::create('/tien-do')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY))
            ->add(Url::create('/thu-vien')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY))
            ->add(Url::create('/lien-he')
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY))
            ->add(Url::create('/tin-tuc'));
            
        $posts = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->get();

        foreach ($posts as $post) {
                $sitemap->add(
        Url::create("/tin-tuc/{$post->slug}")
            ->setLastModificationDate(Carbon::parse($post->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.6)
    );
        }
            $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
