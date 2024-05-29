<div class="field has-addons mr-6 is-flex is-justify-content-space-between">
    <div class="is-flex">
        <div class="control">
            <input class="input is-size-7 ml-5 has-background-white smart-input" type="text">
        </div>
        <div class="control">
            <button class="button is-info is-size-7 ml-5">
                Search
            </button>
        </div>
    </div>
    <a href="<?= ROOT ?>/single_class/<?= $row->class_id ?>?tab=staffs-add">
        <button class="button is-primary has-text-white is-size-7 is-size-7-mobile mb-4"><i class="fa fa-plus"></i>Add New Staff</button>
    </a>
</div>