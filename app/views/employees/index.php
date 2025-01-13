<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="block">
        <h3 class="title" id="titulo">Employees</h3>
        <p class="subtitle">Here's a list of your employees</p>
    </div>

    <div class="block">
        <a href="<?= base_url('employees/new') ?>" class="button">
            <span class="icon">
                <i class="fas fa-plus"></i>
            </span>
            <span>Add new</span>
        </a>
    </div>

    <div class="block">
        <table class="table is-striped is-hoverable is-fullwidth" aria-describedby="titulo">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Department</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>87320765613</td>
                    <td>John Doe</td>
                    <td>0123456789</td>
                    <td>m@email.com</td>
                    <td>RH</td>
                    <td>

                        <a href="edita.html" class="btn btn-warning btn-sm me-2">
                            <span class="icon">
                                <i class="fas fa-edit"></i>
                            </span>
                        </a>

                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#eliminaModal" data-bs-id="1">
                            <span class="icon">
                                <i class="fas fa-trash-alt"></i>
                            </span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<heart-element data-start=<?= 90 ?>>
    <button class="button" aria-label="Heart">💜 × <span><?= 90 ?></span></button>
</heart-element>

<?= $this->include('components/heart.html') ?>

<?= $this->endSection() ?>