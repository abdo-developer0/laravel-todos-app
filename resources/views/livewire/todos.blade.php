<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
                    <div class="card-body py-4 px-4 px-md-5">

                        <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
                            <i class="fas fa-check-square me-1"></i>
                            <u>My Todo-s</u>
                        </p>

                        <div class="pb-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row align-items-center">
                                        <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" wire:model="taskName" placeholder="Add new...">
                                        <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i class="fas fa-calendar-alt fa-lg me-3"></i></a>
                                        <div>
                                            <button type="button" wire:click="addTask" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
                            <p class="small mb-0 me-2 text-muted">Filter</p>
                            <select class="select" wire:model="filter">
                                <option value="all">All</option>
                                <option value="completed">Completed</option>
                                <option value="active">Active</option>
                            </select>
                            <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
                            <select class="select" wire:model="addedDate">
                                <option value="today">Today</option>
                                <option value="yesterday">Yesterday</option>
                                <option value="this-week">This week</option>
                                <option value="last-week">Last week</option>
                                <option value="this-month">This month</option>
                                <option value="any-date">Any date</option>
                            </select>
                            <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                                    class="fas fa-sort-amount-down-alt ms-2"></i></a>
                        </div>

                        {{-- start list all todos --}}
                        @foreach ($todos as $todo)
                        <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
                            <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                                <div class="form-check">
                                    <input class="form-check-input me-0" type="checkbox"  wire:click="completeTask({{$todo->id}})" @if($todo->completed) disabled checked @endif>
                                </div>
                            </li>
                            <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                                <p class="lead fw-normal mb-0">{{$todo->task}}</p>
                            </li>
                            <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                                <div class="d-flex flex-row justify-content-end mb-1">
                                    {{--  --}}
                                </div>
                                <div class="text-end text-muted">
                                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                        {{-- end list all todos --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
