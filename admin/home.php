<main>


	<div class="head-title">
		<div class="left">
			<h1>Tổng Quan</h1>
			<ul class="breadcrumb">
				<li>
					<a href="#">Trang Chủ</a>
				</li>
				<li><i class='bx bx-chevron-right'></i></li>
				<li>
					<a class="active" href="#">Tổng Quan </a>
				</li>
			</ul>
		</div>

	</div>

	<ul class="box-info">
		<li>
			<i class='bx bxs-calendar-check'></i>
			<span class="text">
				<?php foreach($count_bill as $key => $bill):
					extract($bill);

					?>
					<h3>
						<?= $bill['count'] ?>
					</h3>
				<?php endforeach; ?>

				<p>Đơn Hàng</p>
			</span>
		</li>
		<li>
			<i class='bx bxs-group'></i>
			<span class="text">
			<?php foreach($count_account as $key => $ac):
					extract($ac);

					?>
					<h3>
						<?= $ac['count'] ?>
					</h3>
				<?php endforeach; ?>
				<p>Khách Hàng</p>
			</span>
		</li>
		
	</ul>


	<div class="table-data">
		<div class="order">
			<div class="head">
				<h3>Đơn Hàng Gần Đây </h3>
				<i class='bx bx-search'></i>
				<i class='bx bx-filter'></i>
			</div>
			<table>
				<thead>
					<tr>
						<th>Khách Hàng</th>
						<th>Ngày</th>
						<th>Trạng Thái</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($loadAll_bill_home as $key => $bill):
						extract($bill);
						$kh = $bill["name"].'<br>
                    	'.$bill["email"];
						$trangthaidh = get_ttdh($bill["bill_startus"]);
						?>
						<tr>
							<td>
								<p>
									<?= $kh ?>
								</p>
							</td>
							<td>
								<p>
									<?= $bill["date"] ?>
								</p>
							</td>
							<td>
								<span class="status completed">
									<?= $trangthaidh ?>
								</span>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</main>
</section>