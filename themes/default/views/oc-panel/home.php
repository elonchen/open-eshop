<?php defined('SYSPATH') or die('No direct script access.');?>
<div class="page-header">
    <h1><?=__('Welcome')?> <?=Auth::instance()->get_user()->name?></h1>
    <p><?=__('Thanks for using Open eShop.')?> 
        <?=__('Your installation version is')?> <span class="label label-info"><?=core::VERSION?></span> 
        <a class="btn btn-xs btn-primary pull-right" href="<?=Route::url('oc-panel',array('controller'=>'update','action'=>'index'))?>?reload=1">
                        <?=__('Check for updates')?></a>

    </p>
</div>

    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading"><h2><?=__('Latest News')?></h2>
            </div>
            <div class="panel-body">
                <ul>
                    <?foreach ($rss as $item):?>
                        <li><a target="_blank" href="<?=$item['link']?>" title="<?=HTML::chars($item['title'])?>"><?=$item['title']?></a></li>
                    <?endforeach?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fopeneshop&amp;width=350&amp;height=600&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true&amp;appId=181472118540903" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:600px;" allowTransparency="true"></iframe>
    </div>

    <div class="col-md-4">
       <a class="twitter-timeline" href="https://twitter.com/openeshop" target="_blank" data-widget-id="420496085346299904">Tweets by @openeshop</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    </div>
