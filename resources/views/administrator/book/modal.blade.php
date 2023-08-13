
<!-- Modal 3-->
<div class="modal fade" id="detailBook" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" >{{ $data->name }}</h3>
                        <h6 class="card-subtitle" >asfas</h6>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6">
                                <div class="white-box text-center"><img src="{{ asset('storage/images/book/'.  $data->image )}}" width="200px" class="mt-5 img-responsive"></div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6">
                                <h4 class="box-title mt-5">Product description</h4>
                                <p>casfsa</p>
                                <h2 class="mt-5">
                                    Rp. <small class="text-success" style="font-size: 13px" > stock</small>
                                </h2>
                                <hr>
                                {{-- <p wire:model='release_date'> <span>Exp. Release Date : {{ $release_date }} </span> </p>
                                <p wire:model='cpu'> <span> CPU : {{ $cpu }} </span> </p>
                                <p wire:model='memory'><span> Memory : {{ $memory }} </span> </p> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>
