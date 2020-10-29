<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">

                {{-- MOSTRA NOME USUARIO LOGADO  --}}

                {{-- <li class="nav-item">
                    <hr style="margin-top: 0px; margin-bottom: 0px; margin: 0px">
                    <a style="margin-top: 0px !important;">
                        <i class="fas fa-user"></i>
                        <p>@if (strlen(Auth::user()->name) > 19)
                            {{ substr(Auth::user()->name, 0, 16).'...'}}
                @else
                {{ Auth::user()->name }}
                @endif
                </p>
                </a>
                <hr style="margin-top: 0px; margin-bottom: 5px;">
                </li> --}}

                <li class="nav-item {{ (request()->Is('/')) ? 'active' : '' }}" class="sr-only">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <p>Menu Inicial</p>
                    </a>
                </li>
                
                
                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-sun" style="font-size:20px" actived></i>
                        <p>Colégio</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="active'">
                                <a href="/CadTurma">
                                    <span class="sub-item">Cadastrar Turma</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/listaTurma">
                                    <span class="sub-item">Listar Turma</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>




                <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts2">
                        <i class="fas fa-bed" actived></i>
                        <p>Estudantes</p>
                        <span class="caret"></span>
                    </a>
                    <div class="expandable collapse" id="sidebarLayouts2">
                        <ul class="nav nav-collapse">
                            <li class="">
                                <a href="/matricula">
                                    <span class="sub-item">Cadastrar Aluno</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/listarAlunos">
                                    <span class="sub-item">Listar Alunos</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </li>
                <li class="nav-item {{ (request()->Is('/')) ? 'active' : '' }}" class="sr-only">
                    <a href="/loginaluno">
                        <i class="fas fa-home"></i>
                        <p>Portal do Aluno</p>
                    </a>
                </li>
                <li class="nav-item {{ (request()->Is('/')) ? 'active' : '' }}" class="sr-only">
                    <a href="/ouvidoria">
                        <i class="fas fa-home"></i>
                        <p>Fale Conosco</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a data-toggle="collapse" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Sair</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- End Sidebar -->