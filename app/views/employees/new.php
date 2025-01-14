<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="block">
        <h3 class="title" id="titulo">Employees</h3>
        <p class="subtitle">Add new employee</p>
    </div>
    <div class="block">
        <?php
        $error = session()->getFlashdata('error');
        if ($error):
        ?>
            <message-element>
                <div class="notification is-danger is-light">
                    <button class="delete"></button>
                    <?= $error ?>
                </div>
            </message-element>

        <?php
        endif
        ?>
    </div>
    <div class="block">
        <form action="<?= base_url("employees") ?>" method="post" class="columns is-multiline">
            <aside class="column is-half">
                <fieldset class="field">
                    <label class="label">Code</label>
                    <div class="control">
                        <input autocomplete="off" name="code" class="input" type="text" placeholder="Code">
                    </div>
                    <!-- <p class="help">This is a help text</p> -->
                </fieldset>
                <fieldset class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input autocomplete="off" name="name" class="input" type="text" placeholder="Name">
                    </div>
                </fieldset>

                <fieldset class="field">
                    <label class="label">Birhtdate</label>
                    <div class="control">
                        <input autocomplete="off" name="birthdate" class="input" type="date" placeholder="Birthdate">
                    </div>
                </fieldset>
            </aside>

            <aside class="column is-half">
                <fieldset class="field">
                    <label class="label">Phone</label>
                    <div class="control">
                        <input autocomplete="off" name="phone" class="input" type="text" placeholder="Phone">
                    </div>
                </fieldset>
                <fieldset class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input autocomplete="off" name="email" class="input" type="email" placeholder="Email">
                    </div>
                </fieldset>
                <fieldset class="field">
                    <label class="label">Department</label>
                    <p class="control">
                        <span class="select is-fullwidth">
                            <select name="department" class="select">
                                <option selected>Select a department</option>
                                <?php foreach ($departments as $department): ?>
                                    <option value="<?= $department->id ?>"><?= $department->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </span>
                    </p>
                </fieldset>
            </aside>
            <aside class="column is-half">
                <fieldset class="field">
                    <p class="control">
                        <button class="button">
                            Save
                        </button>
                        <a href="<?= base_url('employees') ?>" class="button is-link">
                            Back
                        </a>
                    </p>
                </fieldset>
            </aside>
        </form>
    </div>
</section>


<?=
$this->include('components/message.html');
$this->endSection();
?>