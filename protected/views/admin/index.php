<div class="admin-page">
    <div class="login-box">
        <h1 class="title is-3 has-text-centered">
            <?php echo !$isRegister ? 'Login' : 'Register'; ?>
        </h1>
        <div class="login-content">
            <form id="login-form">
                <input id="input_username" type="text" class="input sec" placeholder="Masukan username">
                <input id="input_password" type="password" class="input sec" placeholder="Masukan password">
                <?php if ($isRegister){ ?>
                    <div class="select sec">
                        <select id="input_type">
                            <option value="ADMIN">ADMIN</option>
                            <option value="KEPDES">KEPDES</option>
                        </select>
                    </div>
                    <a id="btn_register" class="button is-info sec">Register</a>
                <?php } else { ?>
                    <a id="btn_login" class="button is-info sec">Login</a>
                <?php }; ?>
            </form>
        </div>
        <p class="detail-no-acount">
            <?php
            if ($isRegister) {
                echo "Sudah punya akun ?, <a href='$currentPath'>login</a>";
            } else {
                echo "Belum punya akun ?, <a href='$currentPathReg'>Register</a>";
            }
            ?>
    </div>
</div>