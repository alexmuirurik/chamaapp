<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="fs-4">Chamas table</h6>
        <div class="dropdown">
            <a href="{{route('chama.create')}}" class="btn btn-outline btn-success">Create a Chama</a>
        </div>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                            Chama</th>
                        <th class="text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            Function</th>
                        <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
                            Status</th>
                        <th class="text-center text-secondary text-xxs font-weight-bolder opacity-7">
                            Employed</th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center px-2 py-1">
                                    <img src="https://api.dicebear.com/8.x/bottts/svg" class="img-fluid me-3" alt="user1" width="40">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$user->firstname.' '.$user->lastname}}</h6>
                                        <p class="text-xs text-secondary mb-0">{{$user->email}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                <p class="text-xs text-secondary mb-0">Organization</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>