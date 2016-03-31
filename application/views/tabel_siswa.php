	<table id="myTable">
					<thead>
						<th>Email</th>
						<th>Password</th>
						<th>Level</th>
						<th>Action</th>
					</thead>
					<tbody>
					<?php foreach ($siswa->result() as $row):?>
						<tr>
							<td><?=$row->id_siswa;?></td>
							<td><?=$row->nama;?></td>
							<td><?=$row->kelas;?></td>
							<td>
								<a href="#"  class="btn btn-default"><i class="fa fa-edit"></i> </a>
								<a href="#"  class="btn btn-default"><i class="fa fa-remove"></i> </a>
							</td>
						</tr>
					<?php endforeach;?>	
					</tbody>
				</table>