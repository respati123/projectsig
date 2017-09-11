@extends('welcome')

@section('title','Dashboard')
@section('koplak','Dashboard')

@section('content')
  <div class="row"> <!-- row  -->
    <div class="container"> <!-- container -->
    <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModal1">Create New Category</button>
    <hr class="divider">
      <h2>VueTables 2 Options API</h2>
      <v-client-table :data="dataList" :columns="columns" :options="options">
       
      </v-client-table>
    </div>
    </div> <!-- endcontianer -->
  </div> <!-- endrow -->
  
  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Name Category</h4>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" v-on:submit.prevent="createItem()">
            <div class="form-group">
                <label for="name">Name of Category:</label>
                <input type="text" name="nama_kategori" class="form-control" v-model="newItem.nama_kategori" />
                <br>
                <span v-if="formErrors['nama_kategori']" class="error text-danger">@{{ formErrors['nama_kategori'][0] }}</span>
            </div>

             <div class="form-group">
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

