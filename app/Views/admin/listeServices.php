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
                            <th>Description du service</th>
                            <th>Date de la demande</th>
                            <th></th>
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
                                <td><?= esc($dmd['date_essai']) ?></td>

                                <td>
                                    <strong><?= esc($dmd['date_essai']) ?></strong><br>
                                    <small class="text-muted"><?= esc($dmd['date_essai']) ?></small>
                                </td>

                                <td>
                                    <i class="fa fa-envelope"></i> <?= esc($dmd['date_essai']) ?><br>
                                    <i class="fa fa-phone"></i> <?= esc($dmd['date_essai']) ?>
                                </td>

                                <td>
                                    <span class="badge bg-dark">
                                        <?= esc($dmd['date_essai']) ?> <?= esc($dmd['date_essai']) ?>
                                    </span>
                                </td>

                                <td>
                                    <?= date('d/m/Y', strtotime($dmd['date_essai'])) ?>
                                </td>

                                <td>
                                    <?= date('d/m/Y H:i', strtotime($dmd['date_essai'])) ?>
                                </td>
                                <td>
                                    
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
