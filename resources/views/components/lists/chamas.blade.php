<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h6 class="fs-4">Chamas table</h6>
        <div class="dropdown">
            <a wire:navigate href="{{route('chama.create')}}" class="btn btn-outline btn-success">Create a Chama</a>
        </div>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
                <tbody>
                    @foreach ($chamas as $chama)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center px-2 py-1">
                                    <img src="{{asset('assets/img/groupicon.png')}}" class="img-fluid me-3" alt="user1" width="40">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">{{$chama->title}}</h6>
                                        <p class="text-xs text-secondary mb-0">{{$chama->description}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{$chama->bank_account}} Bank</p>
                                <p class="text-xs text-secondary mb-0">Ksh {{$chama->bank_balance}}.00</p>
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