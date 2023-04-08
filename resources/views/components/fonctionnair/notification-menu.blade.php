
<li class="nav-item dropdown no-arrow mx-1">
    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
        <span class="badge bg-danger badge-counter">+{{$newCount}}</span><i class="fas fa-bell fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
            <h6 class="dropdown-header">Notifications center</h6><a class="dropdown-item d-flex align-items-center" href="#">
              
                @foreach($notifications as $notification) 
            
            </a><a class="dropdown-item d-flex align-items-center" href="{{$notification->data['url']}}">
                <div class="me-3">
                    <div class="bg-warning icon-circle"><i class="{{$notification->data['icon']}}"></i></div>
                </div>
                <div><span class="small text-gray-500">{{$notification->created_at}}</span>
                    <p>{{$notification->data['body']}}</p>
                </div>
                @endforeach
            </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </div>
</li>