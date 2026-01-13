<?= $this->extend('admin/miseEnPage') ?>
<?= $this->section('content') ?>

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">
                <h1 class="page-header-title">Demandes d’essai</h1>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5><?= esc($titre) ?></h5>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>id</th>
                            <th>Client</th>
                            <th>Contact</th>
                            <th>Véhicule</th>
                            <th>Date essai</th>
                            <th>Demande envoyée</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (empty($demandes)): ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    Aucune demande d’essai trouvée
                                </td>
                            </tr>
                        <?php endif; ?>

                        <?php foreach ($demandes as $dmd): ?>
                            <tr>
                                <td><?= esc($dmd['dmd_id']) ?></td>

                                <td>
                                    <strong><?= esc($dmd['us_nom']) ?></strong><br>
                                    <small class="text-muted"><?= esc($dmd['us_prenom']) ?></small>
                                </td>

                                <td>
                                    <i class="fa fa-envelope"></i> <?= esc($dmd['us_mail']) ?><br>
                                    <i class="fa fa-phone"></i> <?= esc($dmd['us_tel']) ?>
                                </td>

                                <td>
                                    <span class="badge bg-dark">
                                        <?= esc($dmd['voit_marq']) ?> <?= esc($dmd['voit_mdl']) ?>
                                    </span>
                                </td>

                                <td>
                                    <?= date('d/m/Y', strtotime($dmd['date_essai'])) ?>
                                </td>

                                <td>
                                    <?= date('d/m/Y H:i', strtotime($dmd['created_at'])) ?>
                                </td>

                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>
