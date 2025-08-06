
<?php
add_action('admin_menu', function() {
    add_submenu_page('themes.php', 'TW Grid-kortkoder', 'TW Grid-kortkoder', 'manage_options', 'tw-grid-generator', 'tw_grid_generator_page');
});

function tw_grid_generator_page() {
    ?>
    <div class="wrap">
        <h1>TW Grid-kortkodsgenerator</h1>
        <form oninput="updatePreview()">
            <label>Antal kolumner:
                <input type="number" id="cols" name="cols" value="3" min="1" max="6">
            </label><br><br>
            <label>Gap (marginal):
                <input type="number" id="gap" name="gap" value="3" min="0" max="5">
            </label><br><br>
            <label>Extra klass (valfritt):
                <input type="text" id="class" name="class">
            </label><br><br>
            <strong>Genererad kortkod:</strong><br>
            <code id="shortcode-preview">[tw_grid cols="3" gap="3"]Ditt innehåll[/tw_grid]</code>
        </form>
        <script>
        function updatePreview() {
            const cols = document.getElementById('cols').value;
            const gap = document.getElementById('gap').value;
            const klass = document.getElementById('class').value.trim();
            let sc = `[tw_grid cols="${cols}" gap="${gap}"`;
            if (klass) sc += ` class="${klass}"`;
            sc += `]Ditt innehåll[/tw_grid]`;
            document.getElementById('shortcode-preview').innerText = sc;
        }
        </script>
    </div>
    <?php
}
