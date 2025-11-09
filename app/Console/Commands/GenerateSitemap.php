<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Run with: php artisan app:generate-sitemap
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     */
    protected $description = 'Generate sitemap.xml for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Generating sitemap...');

        // Replace this with your actual website URL (e.g. your production or local URL)
        $baseUrl = config('app.url') ?? 'https://your-website.com';

        try {
            SitemapGenerator::create($baseUrl)
                ->writeToFile(public_path('sitemap.xml'));

            $this->info('✅ Sitemap generated successfully at: public/sitemap.xml');
        } catch (\Exception $e) {
            $this->error('❌ Error generating sitemap: ' . $e->getMessage());
        }
    }
}
