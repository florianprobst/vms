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
	<table>
		<tr>
			<td colspan='8'><h4>Kopfdaten</h4></td>
		</tr>
		<tr>
			<th>eTag</th>
			<td><?= h($valf->etag) ?></td>
			<th>Lagerort</th>
			<td><?= $valf->has('stock') ? $valf->stock->lagerort : '' ?></td>
			<th>Kunde</th>
			<td colspan='3'><?= $valf->has('customer') ? $valf->customer->name : '' ?></td>
		</tr>
		<tr>
			<th>Status</th>
			<td colspan='3'>
				<?
				$condition = '';
				foreach ($conditions as $cond){
					if($cond->id == $valf->reports[0]->condition_id) {
					$condition = $cond;
					}
				}
				echo h($condition->bezeichnung);
				?>
			</td>
			<th>Letzte &Auml;nderung</th>
			<td>
				<?php if (!empty($valf->reports)): ?>
					<?= h($valf->reports[0]->datum); ?>
				<?php endif; ?>
			</td>
		</tr>
		<tr>
			<td colspan='8'><h4>Armaturendaten</h4></td>
		</tr>
		<tr>
			<th>Typ</th>
			<td><?= $valf->has('valvetype') ? $valf->valvetype->bezeichnung : '' ?></td>
			<th>Hersteller</th>
			<td colspan='2'><?= $valf->has('manufacturer') ? $valf->manufacturer->name : '' ?></td>
			<td colspan='3' rowspan='6' style='width: 321px;height:353px;table-layout: fixed; border-none; background-image:url(https://www.gidema.de/vms/img/valve_datasheet.jpg);background-repeat:no-repeat;vertical-align:top'>
				<table style='background-color: transparent; border: 0px solid black;'>
					<tr style='border: 0px solid black;'>
						<td style='width:65px;height:14px;min-width:0px;line-height:0px;padding:0px'>&nbsp;</td>
						<td style='width:60px;height:12px;min-width:0px;line-height:0px;padding:0px'>&nbsp;</td>
						<td style='width:201px;height:12px;min-width:0px;line-height:0px;padding:0px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'>&nbsp;&nbsp;&nbsp;<?= h($valf->spindelabmessungen) ?> mm</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='3' style='height:40px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='2' style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'><?= h($valf->stopfbuchsenbrilleabmessungen) ?></td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='3' style='height:80px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td style='padding:0px'>&nbsp;</td>
						<td colspan='2' style='padding:0px'>&nbsp;&nbsp;&nbsp;&nbsp;<?= h($valf->anzahlpackungsringe) ?> Stk. <?= h($valf->packungsringabmessung) ?></td>
					</tr>
					
					<tr style='border: 0px solid black;'>
						<td colspan='3' style='height:45px'>&nbsp;</td>
					</tr>
					<tr style='border: 0px solid black;'>
						<td colspan='2' style='padding:0px'>&nbsp;</td>
						<td style='padding:0px'><?= h($valf->grundringabmessung) ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<th>DN</th>
			<td><?= $this->Number->format($valf->dn) ?></td>
			<th>PN</th>
			<td colspan='2'><?= $this->Number->format($valf->pn) ?></td>
		</tr>
		<tr>
			<th>Einbaul&auml;nge</th>
			<td><?= $this->Number->format($valf->einbaulaenge) ?></td>
			<th>Flanschform</th>
			<td colspan='2'><?= $valf->has('flangetype') ? $valf->manufacturer->bezeichnung : '' ?></td>
		</tr>
		<tr>
			<th>Werkstoff</th>
			<td><?= $valf->has('material') ? $valf->manufacturer->full_name : '' ?></td>
			<th>Baujahr</th>
			<td colspan='2'><?= $this->Number->format($valf->baujahr) ?></td>
		</tr>
		<tr>
			<th>Verschraubung</th>
			<td colspan='4'><?= $valf->has('bolting') ? h($valf->bolting->full_name) : '' ?></td>
		</tr>
		<?php if($valf->valvetype->bezeichnung == 'Sicherheitsventil'): ?>
		<tr>
			<th>Ansprechdruck</th>
			<td><?= $this->Number->format($valf->ansprechdruck) ?></td>
			<th colspan='2'>D0 (kleinster Str&ouml;mungsdurchlauf)</th>
			<td><?= $this->Number->format($valf->d0) ?></td>
		</tr>
		<?php endif; ?>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan='8'><h4>Kopfdichtung</h4></td>
		</tr>
		<tr>
			<th>Abmessungen</th>
			<td><?= h($valf->kopfdichtungabmessung) ?></td>
			<th>Dichtung</th>
			<td colspan='6'><?= $valf->has('gasket') ? h($valf->gasket->name) : '' ?></td>
		</tr>
		<tr>
			<td colspan='8'><h4>Bet&auml;tigungsart / Antriebsdaten</h4></td>
		</tr>
		<tr>
			<th>Bet&auml;tigungsart / Antrieb</th>
			<td><?= $valf->has('actuator') ? h($valf->actuator->bezeichnung) : '' ?></td>
			<th>Seriennummer (Antrieb)</th>
			<td><?= h($valf->actuatorsn) ?></td>
		</tr>
		<tr>
			<td colspan='8'><h4>Bemerkungen / besondere Merkmale</h4></td>
		</tr>
		<tr>
			<td colspan='8'><?= h($valf->besonderheiten) ?></td>
		</tr>
	</table>
	<table class="vertical-table">
    <div class="related">
        <h4>Historie / Bearbeitungsverlauf</h4>
        <?php if (!empty($valf->reports)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Datum') ?></th>
                <th colspan='2'>T&auml;tigkeit</th>
                <th colspan='2'>Zustand</th>
                <th colspan='3'><?= __('Bild') ?></th>
            </tr>
            <?php foreach ($valf->reports as $reports): ?>
            <tr>
                <td><?= h($reports->datum) ?></td>
                <td colspan='2'><?= h($reports->beschreibung) ?></td>
                <td colspan='2'>
                <?
									$condition = '';
									foreach ($conditions as $cond){
										if($cond->id == $reports->condition_id) {
										$condition = $cond;
										}
									}
									echo h($condition->bezeichnung);
									?>                
                </td>
                <td colspan='3'><?= h($reports->bild) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
