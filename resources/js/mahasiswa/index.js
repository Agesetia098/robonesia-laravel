$('#data-table').DataTable({
  serverSide: true,
  ajax: '',
  columns: [
    {
      data: 'id',
      name: 'id',
    },
    {
      data: 'nama',
      name: 'nama',
    },
    {
      data: 'program.nama',
      name: 'program.nama',
    },
    {
      data: 'id',
      // render: function(id){
      //     return /*html */`
      //     <div class="text-center">
      //     <a href="#" class="btn btn-outline-success">Update</a>
      //     <a href="/mahasiswa/delete/${id}" class="btn btn-outline-danger">Delete</a>
      //     </div>
      //     `;
      // }
      render: (id) => /* html */`
                <div class="text-center">
                <a href="#" class="btn btn-outline-success">Update</a>
                <a href="/mahasiswa/delete/${id}" class="btn btn-outline-danger">Delete</a>
                </div>
                `,
    },
  ],
});
