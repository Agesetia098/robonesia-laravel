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
      data: 'id',
      render: (id) => /* html */`
                <div class="text-center">
                <a href="#" class="btn btn-outline-success">Update</a>
                <a href="/mahasiswa/delete/${id}" class="btn btn-outline-danger">Delete</a>
                </div>
                `,
    },
  ],
});
