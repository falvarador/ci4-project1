<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>

<section class="section">
    <div class="block">
        <h3 class="title" id="titulo">Employees</h3>
        <p class="subtitle">Add new employee</p>
    </div>
    <div class="block">
        <form action="<?= base_url("employees") ?>" class="columns is-multiline">
            <aside class="column is-half">
                <fieldset class="field">
                    <label class="label">Key</label>
                    <div class="control">
                        <input autocomplete="off" class="input" type="text" placeholder="Key">
                    </div>
                    <!-- <p class="help">This is a help text</p> -->
                </fieldset>
                <fieldset class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input autocomplete="off" class="input" type="text" placeholder="Name">
                    </div>
                </fieldset>

                <fieldset class="field">
                    <label class="label">Birhtdate</label>
                    <div class="control">
                        <input autocomplete="off" class="input" type="date" placeholder="Birthdate">
                    </div>
                </fieldset>
            </aside>

            <aside class="column is-half">
                <fieldset class="field">
                    <label class="label">Phone</label>
                    <div class="control">
                        <input autocomplete="off" class="input" type="text" placeholder="Phone">
                    </div>
                </fieldset>
                <fieldset class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input autocomplete="off" class="input" type="email" placeholder="Email">
                    </div>
                </fieldset>
                <fieldset class="field">
                    <label class="label">Department</label>
                    <p class="control">
                        <span class="select is-fullwidth">
                            <select class="select">
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
                    </p>
                </fieldset>
            </aside>
        </form>
    </div>
</section>

<?= $this->endSection() ?>