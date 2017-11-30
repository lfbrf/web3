{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Imoveis
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{route('immobile.index')}}">Imoveis</a></li>
                    <li><a href="{{ route('immobile.create') }}">Adicionar Imoveis</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Categorias
                    <span class="caret pull-right"></span>
                </a>
                 <ul>
                    <li><a data-toggle="modal" href="#category">Adicionar Operação</a></li>
                    
                </ul>
               
            </li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->