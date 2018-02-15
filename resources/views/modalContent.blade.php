<div class="pad-15 fin-color-back clear-color">
	<button type="button" class="close lllgrey" data-dismiss="modal">&times;</button>
	<h3 class="nomar">Complete List</h3>
</div>
<div class="pad-15 fin-scroll">
	<table class="table nomar small">
	    <tr>
	        <th class="llgrey">#</th>
	        <th class="llgrey">Project Name</th>
	        <th class="llgrey">Client</th>
	        <th class="llgrey text-center">Project Cost</th>
	    </tr>
	    <?php foreach ($data['source'] as $key => $s) {?>
	    <tr>
	        <td>{{ ($key + 1) }}</td>
	        <td class="text-primary">{{ $s['project'] }}</td>
	        <td class="text-primary">{{ $s['client'] }}</td>
	        <td class="text-center">{{ $s['cost'] }}</td>
	    </tr>
	    <?php } ?>
	</table>
</div>
