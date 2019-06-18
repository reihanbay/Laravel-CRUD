<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js /1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body class="container" style="margin-top: 50px">
	@if(session('sukses'))
		<div class="alert alert-success" role="alert">
			{{session('sukses')}}
		</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="table-responsive">
                <div class="col-6">
					<!-- Judul -->
					<h3 class="container">Data Perpustakaan</h3>
			</div>
				<!-- Tabel -->
			<table class="table table-bordered table-hover" style="margin-top: 20px">
		    	<thead class="thead-light">
                 <tr>
                <th>ID</th>
                <th>Judul</th>    
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                </tr>
                </thead>
                @foreach($data_buku as $buku)
                <tr>
                    <td>{{$buku->id}}</td>
                    <td>{{$buku->Judul}}</td>
                    <td>{{$buku->Pengarang}}</td>
                    <td>{{$buku->Penerbit}}</td>
                    <td>{{$buku->TahunTerbit}}</td>
                    <td>
                        <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning btn-sm" style="color: white">Edit</a>
                        <a href="/buku/{{$buku->id}}/delete" class="btn btn-danger btn-sm" style="color: white">Delete</a>
                    </td>
                </tr>
                @endForeach
            </table>


			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" style="margin-left: 20px">
				  Tambah Data Buku
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-scrollable" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalScrollableTitle">Data Baru</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <form action="/buku/create" method="POST">
				      	{{ csrf_field() }}
					      <div class="modal-body">
					      	<!-- form -->
						        <div class="form-group row" style="margin-left: 10%">

								    <div class="col-sm-10"  style="margin-top: 5%">
								      <input name="judul" required="required" type="text" class="form-control" id="judul" placeholder="Judul Buku">
								    </div>

								    <div class="col-sm-10" style="margin-top: 5%">
								      <input name="pengarang" required="required" type="text" class="form-control" id="pengarang" placeholder="pengarang">
								    </div>

								    <div class="col-sm-10" style="margin-top: 5%">
								      <input name="penerbit" required="required" type="text" class="form-control" id="penerbit" placeholder="penerbit">
								    </div>

								    <div class="col-sm-10" style="margin-top: 5%">
								      <input name="tahunterbit" required="required" type="text" class="form-control" id="tahunterbit" placeholder="tahunterbit">
								    </div>

								</div>
							<!-- endform -->
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Submit</button>
					      </div>
					  </form>
				    </div>
				  </div>
				</div>
			</div>

			</div>
		</div>
	</div>
</body>
</html>