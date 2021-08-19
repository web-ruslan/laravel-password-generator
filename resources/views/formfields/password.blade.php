<?php
$placeholder = isset($options->placeholder) ? $options->placeholder : 'New Password';
$length = isset($options->length) ? $options->length : 12;
?>
<div class="password-generator">
    <div class="form-group row">
        <div class="col-xs-8" style="margin-bottom:0;">
            <input type="text" class="form-control" name="{{ $row->field }}" value="" placeholder="{{ $placeholder }}"/>
        </div>
        <div class="col-xs-1" style="margin-bottom:0;">
            <button type="button" class="btn btn-success btn-xs" style="margin-top:0px;" password-length="{{ $length }}"><i class="voyager-key"></i></button>
        </div>
    </div>
</div>
<script>
    const rnd = (() => {
        const gen = (min, max) => max++ && [...Array(max-min)].map((s, i) => String.fromCharCode(min+i));

        const sets = {
            num: gen(48,57),
            alphaLower: gen(97,122),
            alphaUpper: gen(65,90),
            special: [...`~!@#$%^&*()_+-=[]\{}|;:'",./<>?`]
        };

        function* iter(len, set) {
            if (set.length < 1) set = Object.values(sets).flat();
            for (let i = 0; i < len; i++) yield set[Math.random() * set.length|0]
        }

        return Object.assign(((len, ...set) => [...iter(len, set.flat())].join('')), sets);
    })();
    window.addEventListener("load", function(){
        $('.password-generator .btn-success').on("click", function () {
            $('.password-generator input[name="password"]').val(rnd($(this).attr('password-length')));
        });
    });
</script>
