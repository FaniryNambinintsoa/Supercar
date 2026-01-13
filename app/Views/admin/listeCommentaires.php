<?= $this->extend('admin/miseEnPage') ?>
<?= $this->section('content') ?>

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <div class="page-block">
                <h1 class="page-header-title">Commentaires clients</h1>
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
                            <th>Nom & Prenom</th>
                            <th>Contact</th>
                            <th>Message</th>
                            <th>Modalité</th>
                            <th>Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (empty($commentaires)): ?>
                            <tr>
                                <td colspan="7" class="text-center text-muted">
                                    Aucun commentaire trouvé
                                </td>
                            </tr>
                        <?php endif; ?>

                        <?php foreach ($commentaires as $com): ?>
                            <tr>
                                <td><?= esc($com['coms_id']) ?></td>

                                <td>
                                    <strong><?= esc($com['nom']) ?></strong><br>
                                    <small class="text-muted"><?= esc($com['prenom']) ?></small>
                                </td>

                                <td>
                                    <i class="fa fa-envelope"></i> <?= esc($com['email']) ?><br>
                                    <i class="fa fa-phone"></i> <?= esc($com['tel']) ?>
                                </td>

                                <td>
                                    <?= esc($com['coms_desc']) ?>
                                </td>

                                <td>
                                    <?php if ($com['modalite_contact'] === 'email'): ?>
                                        <span class="badge bg-primary">Email</span>
                                    <?php else: ?>
                                        <span class="badge bg-success">Téléphone</span>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?= date('d/m/Y H:i', strtotime($com['created_at'])) ?>
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
