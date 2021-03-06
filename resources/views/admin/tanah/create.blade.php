@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah  Tanah</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-book"></i> Tambah Tanah</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.tanah.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Keberadaan</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="">Pilih Keberadaan</option>
                                        @foreach ($user as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bidang</label>
                                    <input type="text" class="form-control" disabled id="bidang">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display: none">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto" value="{{ old('foto') }}" 
                                        class="form-control  @error('foto') is-invalid @enderror" required>
        
                                    @error('foto')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" name="file"
                                        class="form-control  @error('file') is-invalid @enderror" required>
                                        @error('file')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                         
                        </div>
                        <div class="row" style="display: none">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kode Barang</label>
                                    <input type="text" name="kode_barang" value="{{ old('kode_barang') }}" placeholder="Masukkan Kode"
                                        class="form-control @error('kode_barang') is-invalid @enderror" required>
        
                                    @error('kode_barang')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Register</label>
                                    <input type="number" name="register" value="{{ old('register') }}" placeholder="Masukkan Register"
                                        class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama"
                                        class="form-control @error('password') is-invalid @enderror" required>
        
                                    @error('name')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>No Sertifikat</label>
                                    <input type="text" name="no_sertifikat" value="{{ old('no_sertifikat') }}" placeholder="Masukkan No"
                                        class="form-control @error('no_sertifikat') is-invalid @enderror" required>
        
                                    @error('no_sertifikat')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                      

                        <div class="row" style="display: none">
                          
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>No PBB</label>
                                    <input type="number" name="no_ppb" value="{{ old('no_ppb') }}" placeholder="Masukkan No PBB"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <Select name="tahun_perolehan" class="form-control">
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>

                                    </Select>
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Luas</label>
                                    <input type="number" name="luas" value="{{ old('luas') }}" placeholder="Masukkan Luas"
                                        class="form-control">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="number" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga"
                                        class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row" style="display: none">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kondisi</label>
                                    <input type="text" name="kondisi" value="{{ old('kondisi') }}" placeholder="Masukkan Kondisi "
                                        class="form-control @error('kondisi') is-invalid @enderror">
        
                                    @error('kondisi')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                           
                            
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Asal usul</label>
                                    <input type="text" name="asal_usul" value="{{ old('asal_usul') }}" placeholder="Masukkan Asal "
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Surat</label>
                                    <input type="date" name="tgl_surat" value="{{ old('tgl_surat') }}" 
                                        class="form-control">
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Status Tanah</label>
                                    <input type="text" name="status" value="ada" readonly placeholder="Masukkan Status "
                                        class="form-control @error('jenis_aset') is-invalid @enderror">
        
                                </div>
                            </div>
                        </div>

                         <div class="row" style="display: none">
                           
                           
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" placeholder="Masukan alamat" id="" cols="30" rows="5">{{ old('alamat') }}</textarea>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <textarea name="kelurahan" class="form-control" placeholder="Masukan kelurahan" id="" cols="30" rows="5">{{ old('kelurahan') }}</textarea>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <textarea name="kecamatan" class="form-control" placeholder="Masukan kecamatan" id="" cols="30" rows="5">{{ old('kecamatan') }}</textarea>
                                    
                                </div>
                            </div>
                             <div class="col-md-3">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="keterangan" class="form-control" placeholder="Masukan Keterangan" id="" cols="30" rows="5">{{ old('keterangan') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="text-center" id="button" style="display: none">
                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('addon-script')
          <script>
                $(document).ready(function () {
                    $('select').select2({
                        theme: 'bootstrap4',
                        width: 'style',
                    });
                });
          </script>
        <script>
              $(document).ready(function(){
                $("#user_id").on("change",function(){
                    const user = $(this).val();
                    if (user) {
                        jQuery.ajax({
                            url: '/api/user/'+user,
                            type: "GET",
                            dataType: "json",
                            success: function (response) {
                                // console.log(response)
                                if(response.upb_id){
                                    $("#bidang").val(response.upb.name)

                                }else if(response.subunit_id){
                                    $("#bidang").val(response.subunit.name)


                                }else if(response.unit_id){
                                    $("#bidang").val(response.unit.name)

                                }else{
                                    $("#bidang").val(response.bidang.name)

                                }

                                $(".row").show();
                                $("#button").show();
                           
                            },
                        });
                    }else{
                        $("#bidang").val("Pilih Keberadaan")

                        // $(".row").hide();
                        $("#button").hide();
                    }
                })
              })

             
          </script>

@endpush