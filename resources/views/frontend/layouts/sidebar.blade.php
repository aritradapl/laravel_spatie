<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
    <div>
        <img src="https://i.imgur.com/GMmCQHC.png" style="height: 80px; width: 200px;" class="w3-round" alt="Norway">
    </div>
    <div class="navi">
        <ul>
            <li class="{{ Request::routeIs('user.home') ? 'active' : '' }}"><a href="{{route('user.home')}}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
            <li class="{{ Request::routeIs('user.page1') ? 'active' : '' }}"><a href="{{route('user.page1')}}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Page1</span></a></li>
        </ul>
    </div>
</div>