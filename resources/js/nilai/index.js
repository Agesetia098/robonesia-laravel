$('#data-table').DataTable({
  serverSide: true,
  ajax: '',
  columns: [
    {
      data: 'nama',
      name: 'nama',
    },
    {
      data: 'pelajaran[0].nama',
      name: 'pelajaran[0].nama',
    },
    {
      data: 'pelajaran[0].pivot.nilai',
      name: 'palajaran[0].pivot.nilai',
    },
    // {
    //     data: 'id',
    //     render: (id) => {

    //     }
    // },
  ]
});