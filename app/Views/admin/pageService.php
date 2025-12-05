<?= $this->extend('admin/miseEnPage') ?>
<?= $this->section('content') ?>

<div class="pc-container">
    <div class="pc-content">

        <div class="page-header">
            <h3 class="mt-3">📋 Liste des Services</h3>
        </div>

        <!-- Bouton ajouter -->
        <div class="mb-3">
            <a href="<?= base_url('admin/service/add') ?>" class="btn btn-primary">
                <i class="fa fa-plus"></i> Ajouter un service
            </a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-striped">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th width="200">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(!empty($services)): ?>
                                <?php foreach($services as $s): ?>
                                    <tr>
                                        <td><?= $s['id'] ?></td>
                                        <td><?= $s['nom'] ?></td>
                                        <td><?= substr($s['description'],0,60) ?>...</td>

                                        <td>
                                            <img src="<?= base_url('uploads/service/'.$s['image']) ?>" 
                                                height="45" width="70" style="object-fit:cover;border-radius:5px">
                                        </td>

                                        <td>
                                            <a href="<?= base_url('admin/service/show/'.$s['id']) ?>" 
                                               class="btn btn-info btn-sm">
                                               <i class="fa fa-eye"></i>
                                            </a>

                                            <a href="<?= base_url('admin/service/edit/'.$s['id']) ?>" 
                                               class="btn btn-warning btn-sm">
                                               <i class="fa fa-pen"></i>
                                            </a>

                                            <a href="<?= base_url('admin/service/delete/'.$s['id']) ?>"
                                               onclick="return confirm('Supprimer ce service ?')"
                                               class="btn btn-danger btn-sm">
                                               <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center text-muted">Aucun service trouvé</td>
                                </tr>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>