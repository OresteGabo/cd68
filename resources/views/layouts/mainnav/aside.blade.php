<?php

use App\custom_php\Nav;


?>
<aside>
    <div class="top">
        <div class="logo">
            <img src="/images/logo.png" alt="LOGO de CDAFAL 68">
            <h3>CDAFAL<span class="danger">68</span></h3>
        </div>
        <div class="close" id="close-btn">
            <span class="material-symbols-outlined">close</span>
        </div>
    </div>
    <div class="sidebar">
        <div class="nav-links">
            <?php

            $nav = new Nav();
            /*$nav->set_activeIndex(2);*/
            /*$nav = app()->makeWith(Nav::class,
                ['$activeIndex' => 3]);*/
            ?>
            <ul>
                @foreach ($nav->getNav1() as $mainNavItem)
                    @include(
                            'layouts.mainnav.link_li',['url'=>$mainNavItem['url'],
                            'icon'=>$mainNavItem['icon'],
                            'label'=>$mainNavItem['label'],
                            'active'=>request()->path()==$mainNavItem['url'] ? 'active':'']
                    )
                @endforeach
            </ul>
        </div>
        <div class="control-links">
            <ul>
                @foreach ($nav->getNav2() as $mainNavItem)
                    @include('layouts.mainnav.link_li',['url'=>'/'.$mainNavItem['url'],'icon'=>$mainNavItem['icon'],'label'=>$mainNavItem['label'],'active'=>$mainNavItem['active']])
                @endforeach
            </ul>
        </div>
    </div>
</aside>
