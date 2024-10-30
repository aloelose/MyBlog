<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column" style="height: 100vh;">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Главная</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-heart"></i>
                    <p>Понравившиеся посты</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>Комментарии</p>
                </a>
            </li>
            <div class="mt-auto text-center mb-3" style="color: #ccc;">
                <div class="user-name-wrapper" style="border: 2px solid #ccc; border-radius: 10px; padding: 10px; background-color: rgba(255, 255, 255, 0.1);">
                    {{$user->name}}
                </div>
            </div>
        </ul>
        <!-- Имя пользователя -->

    </div>
    <!-- /.sidebar -->
</aside>
