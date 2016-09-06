<?php

namespace App\Services;

use App\Article;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Suin\RSSWriter\Channel;
use Suin\RSSWriter\Feed;
use Suin\RSSWriter\Item;

class RssFeed {

    /**
     * Return the content of the RSS feed
     */
    public function getRSS($key, $posts) {
        if (Cache::has($key . '-rss')) {
            return Cache::get($key . '-rss');
        }

        $rss = $this->buildRssData($posts);
        Cache::add($key . '-rss', $rss, 120);

        return $rss;
    }

    /**
     * Return a string with the feed data
     *
     * @return string
     */
    protected function buildRssData(&$posts) {
        $now = Carbon::now();
        $feed = new Feed();
        $channel = new Channel();
        $channel
                ->title('News Reader')
                ->description('Simple NewsReader')
                ->language('en')
                ->copyright('No copyright')
                ->lastBuildDate($now->timestamp)
                ->appendTo($feed);



        foreach ($posts as $post) {
            $item = new Item();
            $item
                    ->title($post->title)
                    ->url($post->url())
                    ->guid($post->url(), true)
                    ->appendTo($channel);
        }
        try {
            $feed = $feed->render();
            // Replace a couple items to make the feed more compliant
            $feed = str_replace(
                    '<rss version="2.0">', '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">', $feed
            );
            $feed = str_replace(
                    '<channel>', '<channel>' . "\n" . '    <atom:link href="' . url('/rss') .
                    '" rel="self" type="application/rss+xml" />', $feed
            );
        } catch (Exception $ex) {
            $feed = "ERROR";
        }



        return $feed;
    }

}
