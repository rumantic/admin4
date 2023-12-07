@php
    if( \bridge\Helpers\Helpers::can_view('data') ) {
        if ( $sessiondata['current_user_group_id'] != 5 ) {
            $user_menu['my_advs'] = array (
                'title' => _e('L_MY_ADVS'),
                //'href' => $sitebill->createUrlTpl($sitebill->getConfigValue('apps.admin3.alias').'/?action=apps-data'),
                'href' => $sitebill->createUrlTpl('account/data'),
                'icon' => 'icon-book',
            );
        }
    }



    if( \bridge\Helpers\Helpers::can_view('renovation_editor') ) {
        $user_menu['contractor'] = array (
            'title' => 'Мои цены на услуги',
            'href' => $sitebill->createUrlTpl($sitebill->getConfigValue('apps.renovation.contractor.alias')),
            'icon' => 'icon- ace-icon fa fa-heart bigger-125',
        );
    }


    if( \bridge\Helpers\Helpers::can_view('vote_page') ) {
        $user_menu['votes'] = array (
            'title' => 'Мои просмотры',
            'href' => $sitebill->createUrlTpl($sitebill->getConfigValue('apps.votes.frontend.alias')),
            'icon' => 'icon-camera',
        );
    }

    $user_menu['profile'] = array (
        'title' => 'Мой профиль',
        'href' => $sitebill->createUrlTpl('account/profile'),
        'icon' => 'icon-user',
    );

    $user_menu['logout'] = array (
            'title' => _e('L_LOGOUT_BUTTON'),
            'href' => $sitebill->createUrlTpl('logout'),
            'icon' => 'icon-off',
        );

@endphp
<div id="sidebar" class="sidebar responsive" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
    <ul class="nav nav-list w-100">
        @foreach($user_menu as $item)
            <li class=" @if( str_contains($item['href'], str_replace('index.php', '', explode('?', $sitebill->request()->getRequestUri())[0])) ) active open @endif w-100">
                <a href="{{$item['href']}}">
                    @if(isset($item['icon']))
                        <i class="{{$item['icon']}}"></i>
                    @endif
                    <span class="menu-text">
                    {{$item['title']}}
                    </span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
