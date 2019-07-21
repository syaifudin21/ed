@extends('admin.admin-template')
@section('css')
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet"/>
<link href="{{asset('vendor/stack-menu/jquery-stack-menu.min.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<main class="app-content">
    <div class="app-title">
        <div>
            <h1>Skema {{env("APP_NAME")}}</h1>
            <p>Selamat datang di skema Pembelajaran</p>
        </div>
    </div>
  <div class="row">
	<div class="menu col-sm-6">
		<nav id="stack-menu">
			<ul >
        @foreach ($kelass as $kelas)
        <li><a href="#" style="text-decoration: none"><b>{{$kelas->kelas}}</b></a>
					<ul>
            <li><a href="#" style="text-decoration: none">
              <h3>{{$kelas->kelas}}</h3>
                <div class="btn-group">
                  <button class="btn btn-sm btn-default"  data-toggle="modal" data-target="#exampleModal"
                    data-ket="editKelas" data-id="{{$kelas->id}}">Edit</button>
                  <button class="btn btn-sm btn-danger"  data-toggle="modal" data-target="#exampleModal">Hapus</button>
                </div>
              </a>
            </li>
            @foreach ($kelas->mapel()->get() as $mapel)
						<li><a href="#"  style="text-decoration: none">{{$mapel->mapel}}</a>
							<ul>
                @foreach ($mapel->bab()->get() as $bab)
								<li><a href="#"  style="text-decoration: none">{{$bab->bab}}</a>
                  <ul>
                    @foreach ($bab->topik()->get() as $topik)
                    <li><a href="#" style="text-decoration: none">{{$topik->topik}}</a></li>
                    @endforeach
                  </ul>
                </li>
                @endforeach

							</ul>
            </li>
            @endforeach
					</ul>
				</li>
        @endforeach
        <li>
            <a href="#" data-toggle="modal" data-target="#exampleModal"
                data-ket="tambahKelas">Tambah Kelas</a>
        </li>
			</ul>
		</nav>
  </div>
  
</div>
</main>
@endsection
@section('script')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" id="formAction"> @csrf
        <div class="modal-body">
          <div id="inputHidden"> </div>
            <div class="form-group row">
              <label for="inptuNama" class="col-sm-4 col-form-label" id="labelNama"></label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inptuNama" required onclick="$(this).removeClass('is-invalid');">
                <span class="form-control-feedback" id="alertNama"></span>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="tambah('{{route('admin.kelas.store')}}')">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
<script src="{{asset('vendor/stack-menu/jquery-stack-menu.min.js')}}"></script>
<script>
  $(document).ready(function(){$("#stack-menu").stackMenu()});

  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var ket = button.data('ket') 
    var modal = $(this)
    if (ket == 'tambahKelas') {
        modal.find('.modal-title').text('Tambah Kelas')
        modal.find('#labelNama').text('Nama Kelas')
        modal.find('#inptuNama').attr('placeholder', 'Nama Kelas')
        modal.find('#inptuNama').attr('name', 'kelas')
        modal.find('#formAction').attr('action', "{{route('admin.kelas.store')}}")
    } else if(ket == 'editKelas'){
        var id = button.data('id')
        modal.find('.modal-title').text('Edit Kelas')
        modal.find('#labelNama').text('Nama Kelas')
        modal.find('#inptuNama').attr('placeholder', 'Nama Kelas')
        modal.find('#inptuNama').attr('name', 'kelas')
        modal.find('#inputHidden').html('<input type="hidden" name="id" value="'+id+'">')
        modal.find('#formAction').attr('action', "{{route('admin.kelas.update')}}")
    }
  })

function tambah(action, pesan = 'Item akan dihapus') {
  console.log(jQuery('#inptuNama').val())
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
    $.ajax({
      url: action,
      method: 'post',
      data: {
          kelas: $('#inptuNama').val(),
      },
      success: function(data){
        if (data.errors) {
          if (data.errors['kelas']) {
            $('#alertNama').show();
            $('#inptuNama').addClass('is-invalid');
            $('#alertNama').empty();
            $('#alertNama').append(data.errors['kelas']);
          }
        }
        
      }
  });
};
</script>
@endsection
