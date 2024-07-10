<x-app-layout>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid my-2">
              <div class="row -botto mb-2">
                  <ol class="breadcrumb col-sm-6 ml-2">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Liste des Articles</li>
                  </ol>
                  <ol class="float-right">
                      <a href="#" class="btn btn-primary mr-4">Nouvelle categorie</a>
                      <a href="{{route('posts.create')}}" class="btn btn-primary mr-4">Nouveau Article </a>
                  </ol>
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title font-bold text-center">Liste des articles</h3>

                        <div class="card-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover table-bordered text-nowrap">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Auteur</th>
                              <th>Titre</th>
                              <th>Categories</th>
                              <th>Date de publication</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>183</td>
                              <td>John Doe</td>
                              <td>11-7-2014</td>
                              <td><span class="tag tag-success">Approved</span></td>
                              <td>Bacon ipsum.</td>
                              <td><span class="tag tag-success">Approved</span></td>
                              <td class="px-3">
                                <a href=""><i class="fas fa-trash-alt pr-2 "></i></a>
                                <a href=""><i class="fas fa-edit pr-2"></i></a>
                                <a href=""><i class="fas fa-eye"></i></a>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card-footer clearfix float-right">
                        {{ $posts->links() }}
                    </div>
                </div>
                <!-- /.row -->
              </div>
        </section>
    </div>

</x-app-layout>
