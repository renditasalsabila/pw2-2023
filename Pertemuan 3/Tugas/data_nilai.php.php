 <div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table text-uppercase table-bordered">
              <th>1</th>
              <th>Rendita Salsabila</th>
              <th>UI/UX</th>
              <th>95</th>
              <th>94</th>
              <th>90</th>
              <th>90.6</th>
              <th>A</th>
              <th>Sangat Memuaskan</th>
              <th>Lulus</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>2</td>
              <td>Rendita</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>3</td>
              <td>Dita</td>
              <td>Jaringan Komputer</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
            if(isset($_POST['submit'])) {
                $nama_siswa = $_POST['nama_lengkap'];
                $uts = $_POST['nilai_uts'];
                $uas = $_POST['nilai_uas'];
                $tugas = $_POST['nilai_tugas'];

                $wr = winRate($uts, $uas, $tugas);
                $grade = grade($wr);
            }		
          ?>
      </body>
  </table>
</div>