


    <table class="table scroll" border="1">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No </th>
                  <th scope="col">Nama </th>
                  <th scope="col">Alamat </th>
                 
                </tr>
              </thead>
              <tbody>
              <?php $nomor= 1; ?>
              @foreach ($data as $ini)
              <tr>
                <th scope="row">{{ $nomor++ }}</th>
                <th>{{ $ini->nama }}</th>
                <td>{{ $ini->alamat }}</td>
               
                
              </tr>
                @endforeach
              </tbody>
            </table> 