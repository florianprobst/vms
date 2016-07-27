<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Valf'), ['action' => 'edit', $valf->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Valf'), ['action' => 'delete', $valf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $valf->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Valves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valf'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Manufacturers'), ['controller' => 'Manufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['controller' => 'Manufacturers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stocks'), ['controller' => 'Stocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stock'), ['controller' => 'Stocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flangetypes'), ['controller' => 'Flangetypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flangetype'), ['controller' => 'Flangetypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Valvetypes'), ['controller' => 'Valvetypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Valvetype'), ['controller' => 'Valvetypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Actuators'), ['controller' => 'Actuators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Actuator'), ['controller' => 'Actuators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gaskets'), ['controller' => 'Gaskets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gasket'), ['controller' => 'Gaskets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boltings'), ['controller' => 'Boltings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bolting'), ['controller' => 'Boltings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="valves view large-9 medium-8 columns content">
<? $this->Form->templates([
	'inputContainer' => '<div style="padding:0px;spacing:0px;margin:0px;line-height:0px;">{{content}}</div>',
	'label' => false
]);
?>
<?= $this->Form->create($valf);?>
<fieldset>
	<table style='vertical-align:center'>
		<tr>
			<td colspan='8'><h4>Kopfdaten</h4></td>
		</tr>
		<tr>
			<th>eTag</th>
			<td><?= $this->Form->input('etag', ['class' => 'vms-edit-form']); ?></td>
			<th>Lagerort</th>
			<td><?= $this->Form->input('stock_id', ['options' => $stocks, 'empty' => true, 'class' => 'vms-edit-form', 'label' => false]); ?></td>
			<th>Kunde</th>
			<td colspan='3'><?= $this->Form->input('customer_id', ['options' => $customers, 'class' => 'vms-edit-form', 'label' => false]); ?></td>
		</tr>
		<tr>
			<th>Status</th>
			<td colspan='3'>
				nicht editierbar
			</td>
			<th>Typ-Nr. (Kunde)</th>
			<td><?= $this->Form->input('typenklasse_kunde', ['class' => 'vms-edit-form']); ?></td>
			<th>Letzte &Auml;nderung</th>
			<td>
				nicht editierbar
			</td>
		</tr>
		<tr>
			<td colspan='8'><h4>Armaturendaten</h4></td>
		</tr>
		<tr>
			<th>Typ</th>
			<td><?= $this->Form->input('valvetype_id', ['options' => $valvetypes, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
			<th>Hersteller</th>
			<td colspan='2'><?= $this->Form->input('manufacturer_id', ['options' => $manufacturers, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
			<td colspan='3' rowspan='6' style='width: 321px;height:353px;table-layout: fixed; border-none; background-image:url(https://www.gidema.de/vms/img/valve_datasheet.jpg);background-repeat:no-repeat;vertical-align:top'>
				<table style='background-color: transparent; border: 0px solid black;'>
					<tr style='border: 0px solid black;'>
						<td style='width:85px;height:14px;min-width:0px;line-height:0px;padding:0px'>&nbsp;</td>
						<td style='width:60px;height:12px;min-width:0px;line-height:0px;padding:0px'>&nbsp;</td>
						<td style='width:176px;height:12px;min-width:0px;line-height:0px;padding:0px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'>&nbsp;<?= $this->Form->input('spindelmaterial_id', ['options' => $spindelmaterials, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
						<td style='padding:0px'>&nbsp;&nbsp;&nbsp;<?= $this->Form->input('spindelabmessungen', ['class' => 'vms-edit-form']); ?> mm</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='3' style='height:40px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='2' style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'><?= $this->Form->input('stopfbuchsenbrilleabmessungen', ['class' => 'vms-edit-form']); ?></td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='3' style='height:80px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td style='padding:0px'>&nbsp;</td>
						<td colspan='2' style='padding:0px'>&nbsp;&nbsp;&nbsp;&nbsp;<?= $this->Form->input('anzahlpackungsringe', ['class' => 'vms-edit-form']); ?> Stk. <?= $this->Form->input('packungsringabmessung', ['class' => 'vms-edit-form']); ?></td>
					</tr>
					
					<tr style='border: 0px solid black;'>
						<td colspan='3' style='height:45px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='2' style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'><?= $this->Form->input('grundringabmessung', ['class' => 'vms-edit-form']); ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<th>DN</th>
			<td><?= $this->Form->input('dn', ['class' => 'vms-edit-form']); ?></td>
			<th>PN</th>
			<td colspan='2'><?= $this->Form->input('pn', ['class' => 'vms-edit-form']); ?></td>
		</tr>
		<tr>
			<th>Einbaul&auml;nge</th>
			<td><?= $this->Form->input('einbaulaenge', ['class' => 'vms-edit-form']); ?></td>
			<th>Flanschform</th>
			<td colspan='2'><?= $this->Form->input('flangetype_id', ['options' => $flangetypes, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
		</tr>
		<tr>
			<th>Geh&auml;usewerkstoff</th>
			<td colspan='4'><?= $this->Form->input('material_id', ['options' => $materials, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
		</tr>
		<tr>
			<th>Baujahr</th>
			<td><?= $this->Form->input('baujahr', ['class' => 'vms-edit-form']); ?></td>
			<th>Medium</th>
			<td><?= $this->Form->input('medium', ['class' => 'vms-edit-form']); ?></td>
		</tr>
		<tr>
			<th>Verschraubung</th>
			<td colspan='4'><?= $this->Form->input('bolting_id', ['options' => $boltings, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
		</tr>
		<!-- BEI AUSWAHL SICHERHEITSVENTIL MÜSSEN FELDER EINGEBLENDET WERDEN!!!! -->
		<?php //if($valf->valvetype->bezeichnung == 'Sicherheitsventil'): ?>
		<tr>
			<th>Ansprechdruck</th>
			<td><?= $this->Form->input('ansprechdruck', ['class' => 'vms-edit-form']); ?></td>
			<th colspan='2'>D0 (kleinster Str&ouml;mungsdurchlauf)</th>
			<td><?= $this->Form->input('d0', ['class' => 'vms-edit-form']); ?></td>
		</tr>
		<?php //endif; ?>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan='8'><h4>Kopfdichtung</h4></td>
		</tr>
		<tr>
			<th>Abmessungen</th>
			<td><?= $this->Form->input('kopfdichtungabmessung', ['class' => 'vms-edit-form']); ?></td>
			<th>Dichtung</th>
			<td colspan='6'><?= $this->Form->input('gasket_id', ['options' => $gaskets, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
		</tr>
		<tr>
			<td colspan='8'><h4>Bet&auml;tigungsart / Antriebsdaten</h4></td>
		</tr>
		<tr>
			<th>Bet&auml;tigungsart</th>
			<td colspan='2'><?= $this->Form->input('actuator_id', ['options' => $actuators, 'empty' => true, 'class' => 'vms-edit-form']); ?></td>
			<th>Seriennummer</th>
			<td><?= $this->Form->input('actuatorsn', ['class' => 'vms-edit-form']); ?></td>
		</tr>
		<tr>
			<td colspan='8'><h4>Bemerkungen / besondere Merkmale</h4></td>
		</tr>
		<tr>
			<td colspan='8'><?= $this->Form->input('besonderheiten', ['class' => 'vms-edit-form']); ?></td>
		</tr>
	</table>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
