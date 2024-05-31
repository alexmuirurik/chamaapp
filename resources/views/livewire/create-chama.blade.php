<div class="multisteps-form">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto mt-4 mb-sm-5">
            <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn  {{ ($countstep === 1) ? 'js-active' : '' }}">
                    <span>1. Chama Info</span>
                </button>
                <button class="multisteps-form__progress-btn {{ ($countstep === 2) ? 'js-active' : '' }}">
                    <span>2. Chama Settings</span>
                </button>
                <button class="multisteps-form__progress-btn  {{ ($countstep === 3) ? 'js-active' : '' }}">
                    <span>4. Finalize</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form mb-8" style="height: 406px;" wire:submit='save'>
                @if ( $countstep === 1) 
                    <div class="card multisteps-form__panel p-3 border-radius-xl js-active">
                        <h5 class="font-weight-bolder">Product Information</h5>
                        <div class="multisteps-form__content">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label>Name</label>
                                    <input class="bg-secondary form-control @error('name') border-danger @enderror" wire:model='name'>
                                </div>
                                <div class="col-12 col-sm-6 mt-sm-0">
                                    <label>County, Town</label>
                                    <input class="bg-secondary form-control @error('location') border-danger @enderror" wire:model='location'>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label class="mt-4">Description</label>
                                    <textarea class="bg-secondary form-control @error('description') border-danger @enderror" wire:model='description'></textarea>                                
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button type="button" wire:click="nextstep" class="btn btn-outline-light ms-auto mb-0">
                                    <span>Next <i class="fa-solid fa-gear fa-spin" wire:loading wire:target='nextstep'></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($countstep === 2)
                    <div class="card multisteps-form__panel p-3 border-radius-xl js-active" >
                        <h5 class="font-weight-bolder">Chama Settings</h5>
                        <div class="multisteps-form__content">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label>Monthly Savings</label>
                                    <input class="bg-secondary form-control @error('savings') border-danger @enderror" wire:model='savings' type="number">
                                </div>
                                <div class="col-12 col-sm-6 mt-sm-0">
                                    <label>Meeting Frequency</label>
                                    <select class="bg-secondary form-control @error('frequency') border-danger @enderror" wire:model='frequency'>
                                        <option value="weekly" selected>Weekly</option>
                                        <option value="biweekly">BiWeekly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Available Loans</label>
                                    <select class="bg-secondary form-control @error('loans') border-danger @enderror" wire:model='loans'>
                                        <option value="ngumbato" selected>Ngumbato</option>
                                        <option value="monthly">Monthly</option>
                                        <option value="principle">Principle</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 mt-sm-0">
                                    <label>Loans Interest</label>
                                    <input class="bg-secondary form-control @error('interest') border-danger @enderror" wire:model='interest' type="number">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <label>Bank Account</label>
                                    <input class="bg-secondary form-control @error('bank') border-danger @enderror" wire:model='bank'>
                                </div>
                                <div class="col-12 col-sm-6 mt-sm-0">
                                    <label>Bank Balance</label>
                                    <input class="bg-secondary form-control @error('balance') border-danger @enderror" wire:model='balance' type='number'>
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button type="button" wire:click='prevstep' class="btn btn-outline-light mb-0">
                                    <span>Prev <i class="fa-solid fa-gear fa-spin" wire:loading wire:target='prevstep'></i></span>
                                </button>
                                <button type="button" wire:click='nextstep' class="btn btn-outline-light ms-auto mb-0">
                                    <span>Next <i class="fa-solid fa-gear fa-spin" wire:loading wire:target='nextstep'></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                
                @if ($countstep === 3)

                    <div class="card multisteps-form__panel p-3 border-radius-xl js-active">
                        <h5 class="font-weight-bolder">Finalize</h5>
                        <div class="multisteps-form__content">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="fs-4">{{$name}}</h3>
                                            <p>{{$description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12 col-sm-6 mt-sm-0">
                                    <label>What's Your Role?</label>
                                    <select class="bg-secondary form-control @error('role') border-danger @enderror" wire:model='role'>
                                        <option value="chairperson">Chairperson</option>
                                        <option value="treasurer">Treasurer</option>
                                        <option value="secretary">Secretary</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label>Need a Manager?</label>
                                    <select class="bg-secondary form-control @error('manager') border-danger @enderror" wire:model='manager'>
                                        <option value="yes" selected>Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-row d-flex mt-4">
                                <button type="button" wire:click='prevstep' class="btn btn-outline-light px-4 mb-0" >
                                    <span>Prev <i class="fa-solid fa-gear fa-spin" wire:loading wire:target='prevstep'></i></span>
                                </button>
                                <button  class="btn btn-success px-4 ms-auto mb-0" type="submit">
                                    <span>Finalize <i class="fa-solid fa-gear fa-spin" wire:loading wire:target='save'></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
