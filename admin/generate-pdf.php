<?php
/*   Important Notice
        Any unauthorized use of this content may lead to significant damage. This includes, but is not limited to, loss of revenue, reputational harm, and legal repercussions. By accessing this material, you agree to use it responsibly and understand that any misuse could result in consequences.
        
        Please respect the rights associated with this work.
        */
 include_once "\143\x6c\x61\163\x73\56\160\x68\x70"; require "\141\163\x73\x65\x74\163\x2f\166\145\156\144\x6f\x72\x2f\141\x75\164\157\154\x6f\141\x64\56\x70\x68\x70"; use Dompdf\Dompdf; use Dompdf\Options; use PhpOffice\PhpWord\PhpWord; use PhpOffice\PhpWord\IOFactory; goto f7f9f; b586f: $a3e00->check(); goto add18; F35ee: goto E4de1; goto A98a1; b116a: $f040c = isset($_POST["\155\145\163\x73\141\x67\x65"]) ? htmlspecialchars($_POST["\155\x65\x73\x73\x61\x67\145"], ENT_QUOTES, "\x55\124\106\55\x38") : ''; goto Ea749; a8e5a: D7981: goto e6fe4; C724b: $dfc24 = filter_input(INPUT_POST, "\x74\171\x70\x65", FILTER_VALIDATE_INT); goto b116a; D3610: $d6246 = $a3e00->generateRandomString(4); goto D4702; b9f7a: d535F($a70df, $f040c, $f5223, $F277d); goto bbe41; Ff2dd: echo "\40\40\40\x20\x20\40\40\40"; goto Ad092; D4702: echo "\40\x20\x20\x20\x20\40\40\40\40\x20\74\144\151\166\x20\x63\x6c\141\x73\163\75\x22\x61\160\160\55\x62\x6f\x64\171\42\x3e\xd\12\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\74\144\151\166\40\143\154\x61\163\163\x3d\x22\162\x6f\167\x20\147\x78\x2d\64\42\76\15\xa\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\x20\x3c\144\x69\166\40\143\x6c\141\163\163\x3d\x22\x63\157\x6c\x2d\x73\155\55\x31\x32\x22\x3e\15\12\40\x20\x20\x20\40\x20\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\x20\74\x64\x69\x76\x20\143\154\141\x73\x73\x3d\42\143\x61\x72\x64\40\155\142\55\x34\x22\x3e\15\xa\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\x20\x20\74\144\151\166\x20\143\154\141\163\163\x3d\x22\x63\141\162\144\x2d\150\x65\141\x64\x65\162\x22\76\15\xa\40\40\40\x20\40\40\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\x20\x20\74\x68\65\x20\143\154\x61\163\163\75\42\143\141\x72\x64\x2d\x74\x69\x74\x6c\x65\x22\76\107\x65\156\x65\162\141\164\145\40\x44\x6f\143\x75\x6d\x65\156\x74\40\x41\x74\x74\x61\143\150\x6d\145\156\164\74\x2f\x68\x35\x3e\xd\12\x20\x20\40\40\40\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\x20\40\40\40\x3c\x2f\144\x69\x76\x3e\15\xa\x20\x20\x20\40\x20\40\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\40\40\40\40\40\40\x3c\41\x2d\55\x20\106\157\162\x6d\40\163\x74\141\162\164\x73\40\55\55\76\15\xa\40\x20\40\40\x20\x20\40\40\40\40\40\x20\x20\40\40\x20\x20\x20\40\40\x20\40\x20\40\74\x66\157\x72\x6d\40\x6d\x65\x74\150\x6f\144\x3d\x22\x50\x4f\x53\124\x22\40\x61\143\x74\x69\157\156\x3d\x22\x67\x65\156\145\x72\x61\164\145\55\160\144\x66\42\x20\x74\141\162\x67\145\164\75\x22\137\142\x6c\141\156\153\x22\76\xd\xa\40\x20\x20\40\x20\x20\x20\40\x20\40\40\40\x20\40\40\x20\40\40\40\40\x20\x20\x20\x20\x20\40\40\40\74\144\151\x76\40\x63\154\x61\163\x73\x3d\x22\143\x61\162\144\x2d\142\157\x64\171\42\x3e\xd\xa\40\x20\x20\x20\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\40\40\40\40\40\x20\x20\x20\x20\40\40\40\74\160\40\143\x6c\141\x73\x73\x3d\42\x63\x61\162\144\x2d\x64\x65\x73\x63\x72\151\x70\x74\x69\x6f\156\x22\x3e\103\165\162\x72\x65\156\164\x6c\171\x20\x74\150\151\x73\x20\146\145\x61\164\165\162\145\x73\x20\144\157\x65\163\x6e\x27\x74\x20\x73\165\x70\x70\x6f\162\x74\40\141\x75\164\157\147\162\x61\x62\40\142\165\x74\x20\167\145\x20\167\151\x6c\x6c\40\x74\162\x79\40\x74\x6f\40\x6d\x61\x6b\x65\x20\143\x68\141\x6e\x67\145\163\x20\157\x6e\40\x66\165\164\x75\162\x65\x73\74\x2f\x62\x3e\x3c\x2f\x70\76\xd\xa\40\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\40\x20\74\x70\40\143\154\x61\x73\163\x3d\42\x63\x61\x72\x64\55\144\145\x73\x63\162\x69\160\x74\151\x6f\x6e\x22\x3e\x28\151\51\40\x59\157\x75\40\143\141\x6e\40\143\x68\141\x6e\x67\145\x20\x6d\145\x73\163\141\x67\x65\x20\x61\x6e\144\40\146\157\157\x74\x65\x72\40\157\x6e\x20\164\150\145\40\164\145\x78\164\40\x61\162\x65\x61\x20\142\x65\x6c\157\x77\x2e\74\57\160\76\xd\xa\x20\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\74\x70\40\143\154\x61\x73\x73\x3d\x22\x63\141\x72\144\55\144\x65\x73\x63\x72\151\x70\164\151\x6f\156\x22\x3e\x28\151\151\51\40\x50\154\x65\141\163\145\40\x6d\141\153\145\40\74\143\157\144\145\76\124\x61\162\147\145\x74\74\57\143\x6f\x64\145\76\x20\x66\x69\x65\154\x64\x20\x62\x6c\141\x6e\x6b\x20\x69\x66\40\171\157\x75\x20\144\x69\x64\x6e\x27\164\40\x68\x61\x76\145\x20\164\141\x72\x67\145\x74\56\74\x2f\160\76\15\xa\40\x20\x20\x20\x20\40\40\x20\40\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\40\x20\40\40\x20\x3c\41\55\55\x20\122\x6f\x77\x20\163\164\x61\162\x74\163\x20\x2d\55\x3e\15\12\x20\x20\x20\x20\40\40\40\40\40\x20\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\40\40\40\x20\40\40\40\x20\x20\40\74\x64\151\x76\x20\x63\154\x61\163\163\x3d\x22\x72\157\x77\40\x67\x78\x2d\x34\x22\x3e\15\12\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\40\40\x3c\x64\151\x76\40\x63\x6c\141\163\163\75\42\x63\157\x6c\x2d\154\x67\55\66\x20\143\157\x6c\x2d\163\x6d\55\66\40\143\157\154\55\61\62\x22\76\15\12\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\x3c\144\151\166\40\143\154\x61\163\x73\x3d\x22\155\142\x2d\63\x22\76\15\12\x20\x20\40\x20\40\x20\40\40\x20\40\40\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\40\40\40\40\40\x20\x3c\154\141\x62\145\154\40\x63\154\141\x73\163\x3d\42\146\x6f\162\155\55\154\x61\x62\x65\154\42\40\146\x6f\162\x3d\42\x74\171\160\x65\42\x3e\101\x74\x74\141\x63\x68\x6d\x65\x6e\x74\x20\x54\171\160\145\74\x2f\154\141\142\x65\154\x3e\xd\xa\40\x20\40\x20\x20\40\40\x20\40\40\x20\40\x20\40\x20\x20\40\40\40\x20\40\x20\40\x20\x20\40\40\x20\40\40\x20\40\40\x20\40\x20\40\40\x20\x20\x20\x20\40\x20\74\163\x65\x6c\x65\x63\164\x20\x6e\x61\155\x65\x3d\42\x74\x79\160\145\x22\40\143\x6c\x61\x73\163\75\42\x66\157\x72\155\x2d\x73\x65\154\x65\143\x74\42\x20\151\x64\75\42\164\171\160\145\x22\76\xd\12\40\x20\40\x20\40\40\x20\40\x20\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\40\74\x6f\x70\x74\x69\x6f\156\x20\x76\141\154\165\x65\75\x22\60\42\x3e\x50\x44\106\x3c\57\x6f\160\164\151\157\156\x3e\15\12\x20\x20\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\x20\x20\x20\40\40\40\x20\40\40\x20\x20\40\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\x3c\x6f\160\164\x69\x6f\x6e\x20\166\141\x6c\165\x65\x3d\x22\61\42\76\x44\x4f\x43\130\x3c\x2f\157\160\164\x69\157\156\x3e\15\xa\x20\x20\x20\40\40\40\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\x20\x3c\57\x73\145\x6c\x65\143\164\76\xd\xa\x20\x20\x20\40\x20\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\74\x2f\144\151\x76\76\15\12\x20\40\40\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\x20\x20\40\40\40\x20\x20\x20\40\x3c\57\x64\151\166\76\15\12\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\x20\40\x20\x3c\144\x69\166\40\143\x6c\x61\163\163\75\42\x63\157\154\x2d\x6c\147\x2d\66\x20\143\x6f\154\55\x73\x6d\55\x36\x20\x63\157\x6c\55\x31\62\42\76\xd\xa\40\x20\x20\x20\40\x20\40\40\40\x20\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\40\x20\x20\x20\40\40\40\40\40\40\40\40\x20\40\x20\40\40\x20\x3c\x64\151\x76\40\x63\154\x61\163\x73\x3d\42\155\142\x2d\x33\42\76\xd\12\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\40\40\40\x20\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\40\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x3c\154\141\142\145\x6c\40\143\x6c\x61\163\163\75\x22\146\157\162\155\55\x6c\141\x62\x65\154\x22\40\146\157\x72\75\x22\164\x61\x72\147\145\x74\x22\x3e\124\141\x72\x67\x65\x74\x3c\x2f\x6c\141\142\145\154\x3e\15\12\x20\40\40\40\40\40\x20\x20\40\40\40\x20\40\40\40\40\x20\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\40\x3c\151\156\160\x75\164\40\164\171\x70\x65\x3d\42\164\x65\x78\164\42\40\x6e\x61\x6d\x65\75\42\164\141\162\147\x65\x74\42\x20\x63\x6c\141\x73\x73\75\x22\146\157\x72\x6d\x2d\x63\x6f\156\164\162\x6f\x6c\x22\x20\x69\144\75\42\x74\141\162\147\145\x74\42\40\166\141\154\165\145\x3d\42\42\40\160\x6c\x61\143\x65\150\x6f\154\x64\145\x72\x3d\42\x45\x6e\x74\x65\162\x20\171\x6f\x75\162\x20\164\x61\x72\x67\x65\164\40\145\x6d\x61\151\x6c\40\x68\145\x72\145\42\76\xd\12\40\40\40\40\40\x20\40\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\40\40\40\x20\40\40\x20\40\40\x3c\x2f\144\x69\166\76\15\xa\x20\x20\40\40\x20\40\40\x20\40\x20\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\40\x20\x3c\x2f\x64\x69\166\x3e\xd\12\x20\x20\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\40\40\40\x20\x20\40\40\40\x20\x3c\x64\151\166\40\143\x6c\141\163\x73\75\42\143\x6f\x6c\55\154\x67\x2d\x36\x20\143\x6f\154\55\x73\x6d\x2d\x36\40\143\157\154\55\x31\x32\42\x3e\15\12\40\40\x20\x20\40\x20\x20\40\40\40\40\x20\40\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\40\40\40\40\40\40\x20\74\x64\x69\x76\x20\x63\x6c\141\x73\x73\75\x22\x6d\142\55\63\42\x3e\15\xa\40\40\40\40\40\40\40\40\40\40\x20\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\40\x20\40\x20\40\40\40\x20\40\x20\40\40\x3c\x6c\x61\x62\x65\x6c\40\143\x6c\x61\163\163\75\x22\146\157\162\x6d\x2d\154\141\142\145\154\x22\40\x66\157\162\75\42\x6d\145\163\163\141\x67\145\42\76\x4d\x65\x73\x73\x61\147\145\74\x2f\x6c\141\142\x65\154\76\xd\xa\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\40\40\x20\40\x20\74\164\145\x78\164\x61\x72\145\141\40\xd\xa\40\x20\x20\40\x20\40\x20\40\40\x20\x20\40\x20\x20\40\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\40\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\156\141\x6d\x65\75\x22\x6d\145\x73\x73\141\x67\145\42\40\15\xa\x20\40\x20\x20\40\x20\x20\40\40\40\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\40\x20\x20\40\40\40\x20\40\40\40\x70\154\x61\143\x65\150\x6f\154\144\x65\x72\75\x22\105\156\x74\145\162\x20\171\157\165\x72\40\155\145\163\x73\x61\147\145\40\157\x6e\x20\164\157\160\x20\157\146\40\120\104\x46\42\x20\xd\12\x20\40\x20\40\40\40\40\40\40\x20\40\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\x63\154\141\163\163\75\x22\146\x6f\162\x6d\x2d\143\x6f\156\x74\x72\x6f\x6c\x22\x20\15\12\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\40\x20\40\x20\40\x20\40\40\x20\40\40\x20\40\x20\40\40\x20\40\40\x20\x20\40\40\40\x20\40\x20\x20\40\40\x20\40\x20\40\40\x20\40\151\x64\75\42\155\145\163\x73\x61\147\x65\42\x20\15\xa\40\x20\40\40\x20\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\40\40\40\x20\40\162\x6f\x77\x73\x3d\x22\x35\42\76\x54\x68\x69\x73\x20\x64\157\143\x75\x6d\145\156\x74\40\143\157\156\164\141\x69\156\163\40\x61\x20\x73\145\x63\x75\x72\x65\x20\x6d\x65\x73\x73\x61\147\x65\x2e\40\120\x6c\145\141\x73\145\40\x73\x63\x61\x6e\40\x74\x68\145\40\121\122\x20\x63\157\144\145\x20\x62\145\x6c\157\167\x20\157\156\40\171\x6f\x75\x72\40\x6d\x6f\142\x69\x6c\145\40\144\x65\166\x69\x63\145\x20\164\157\x20\162\145\164\x72\x69\145\166\145\40\x74\150\145\40\x6d\145\x73\163\141\147\x65\x20\163\141\x66\145\x6c\171\x2e\74\57\164\145\170\x74\141\162\x65\141\x3e\xd\xa\x20\x20\40\40\40\x20\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\74\x2f\x64\x69\x76\x3e\15\12\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\40\x20\x20\x3c\57\x64\151\166\76\xd\12\x20\40\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\x20\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\74\x64\151\x76\x20\143\x6c\141\x73\163\x3d\42\143\157\x6c\55\x6c\x67\x2d\x36\40\143\x6f\x6c\55\163\155\55\66\40\x63\157\x6c\x2d\x31\62\42\x3e\15\12\40\x20\40\x20\40\40\x20\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x20\40\x20\x20\40\x20\x20\x20\x20\x20\74\x64\151\x76\40\143\x6c\141\163\x73\75\42\x6d\x62\55\63\42\x3e\xd\xa\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\40\x20\40\x20\x3c\x6c\x61\x62\x65\x6c\40\x63\154\141\x73\163\75\42\146\157\x72\155\x2d\154\141\x62\145\154\42\40\146\157\162\x3d\x22\x66\157\157\x74\x65\x72\42\x3e\106\157\157\x74\x65\162\74\x2f\x6c\x61\x62\145\154\76\15\12\40\40\x20\x20\x20\40\40\40\x20\x20\x20\40\40\x20\40\40\40\x20\40\x20\40\x20\40\40\40\40\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\40\x3c\x74\x65\170\164\x61\x72\145\141\x20\15\xa\x20\40\40\40\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\x20\40\x20\x20\40\40\40\40\40\156\x61\x6d\145\x3d\42\x66\x6f\x6f\x74\x65\162\x22\x20\15\xa\x20\x20\40\x20\40\40\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\40\x20\40\40\x20\40\x20\40\40\x20\40\x20\x20\x20\40\x20\40\x20\x20\x20\40\x20\40\40\40\x20\x70\x6c\141\143\145\x68\157\154\x64\x65\x72\75\42\105\156\164\145\x72\x20\171\x6f\x75\162\40\x6d\145\163\163\x61\x67\x65\40\157\x6e\40\146\x6f\x6f\164\x65\162\40\x6f\x66\x20\x50\104\106\x22\40\15\12\x20\40\40\40\x20\40\x20\40\x20\x20\40\40\40\40\40\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\40\40\x20\40\40\40\40\40\40\x20\x20\143\154\141\x73\163\75\x22\x66\157\x72\x6d\55\x63\157\x6e\164\162\x6f\x6c\42\x20\xd\xa\40\40\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\40\40\40\40\x20\x20\40\40\40\x20\x20\40\x20\x20\40\40\x20\40\x20\40\40\40\40\40\40\x20\x20\40\40\40\40\40\40\x20\40\x69\x64\x3d\x22\x66\x6f\157\164\x65\162\42\x20\xd\xa\x20\x20\x20\x20\40\40\40\40\40\x20\x20\40\40\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\x20\40\40\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\40\40\x20\40\x20\40\162\157\x77\x73\75\x22\65\x22\76\x52\145\x6d\x65\155\x62\x65\162\x20\164\x6f\x20\153\x65\x65\160\x20\x74\x68\151\x73\x20\144\x6f\x63\165\155\x65\x6e\x74\x20\163\141\x66\145\x20\x61\156\x64\40\157\x6e\154\x79\x20\x73\145\x6e\x64\40\151\164\x20\x76\151\x61\x20\x74\x72\x75\163\x74\145\144\40\x65\x6d\141\151\154\40\163\x65\162\x76\x69\x63\x65\x73\56\x3c\x2f\x74\x65\x78\164\141\x72\x65\141\x3e\xd\xa\x20\x20\40\40\x20\40\40\40\x20\x20\40\40\40\x20\40\40\x20\x20\40\40\40\x20\x20\40\40\40\x20\40\40\40\x20\40\40\40\40\x20\x20\x20\40\x20\x3c\x2f\x64\151\166\x3e\xd\12\x20\40\40\x20\x20\x20\40\x20\x20\40\40\40\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\40\40\x20\x20\40\x20\x20\x20\40\74\57\x64\151\x76\x3e\15\xa\x20\40\40\x20\x20\40\x20\x20\40\40\x20\40\x20\40\x20\x20\x20\40\40\x20\40\40\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\40\40\74\144\x69\x76\x20\143\154\x61\x73\163\75\42\x64\x2d\x66\154\145\170\x20\x6a\x75\163\x74\151\146\x79\55\143\x6f\x6e\x74\x65\x6e\x74\55\x6c\x65\146\164\x22\76\15\xa\40\x20\x20\40\40\x20\40\40\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\40\40\x20\40\x20\40\x20\40\40\40\40\x20\40\x20\40\40\40\x20\x20\40\x3c\41\x2d\x2d\40\x53\x75\142\x6d\x69\x74\x20\x62\165\164\164\157\156\x20\55\x2d\x3e\15\12\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\40\40\40\x20\40\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\40\40\x20\x20\74\142\165\164\x74\x6f\156\40\164\171\x70\x65\x3d\x22\x73\x75\x62\x6d\151\164\x22\x20\143\x6c\141\x73\x73\75\42\x62\x74\x6e\x20\x62\164\156\55\160\162\x69\x6d\x61\162\x79\42\x3e\x47\145\156\x65\x72\141\x74\x65\74\57\142\165\x74\164\157\156\x3e\15\xa\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\40\40\40\x20\40\40\x20\x20\x20\x20\40\40\x3c\x2f\x64\x69\166\76\x20\x20\xd\xa\x20\40\x20\x20\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x20\40\40\40\x20\40\40\40\40\40\x20\x3c\57\x64\x69\x76\76\15\12\40\40\x20\40\40\40\x20\40\x20\40\x20\40\40\40\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\x20\40\x20\x20\40\x20\40\x3c\41\55\55\x20\x52\x6f\x77\40\x65\x6e\x64\x73\40\x2d\x2d\x3e\15\12\40\x20\x20\40\40\x20\40\x20\40\40\40\x20\40\40\x20\40\x20\x20\40\40\x20\40\x20\40\40\40\40\40\x3c\x2f\x64\151\x76\76\15\xa\x20\x20\x20\x20\x20\40\40\x20\40\40\x20\40\x20\x20\x20\x20\40\40\40\x20\x20\40\x20\40\74\x2f\146\x6f\x72\155\76\xd\xa\x20\40\40\x20\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\x20\40\x20\x20\40\40\40\x20\x20\x3c\41\55\x2d\x20\106\157\x72\x6d\x20\145\x6e\144\x73\x20\55\x2d\76\15\xa\x20\40\40\x20\x20\x20\40\40\x20\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\74\x2f\144\x69\x76\76\xd\12\40\x20\40\40\40\40\40\x20\40\x20\40\40\x20\40\40\x20\x3c\x2f\144\x69\166\x3e\xd\xa\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\74\x2f\x64\x69\166\76\xd\xa\40\40\x20\x20\40\x20\40\x20\x20\x20\x20\40\74\x21\x2d\x2d\40\122\x6f\167\x20\145\x6e\x64\163\40\55\55\76\15\12\40\40\x20\x20\x20\40\x20\40\40\x20\x3c\x2f\144\151\x76\x3e\15\12\40\40\x20\40\40\x20\x20\x20\40\x20\x3c\144\151\166\x20\x63\154\x61\163\x73\x3d\42\x61\x70\160\55\146\x6f\x6f\x74\145\162\42\x3e\15\12\40\x20\40\40\x20\x20\40\40\40\x20\x20\x20\x3c\x73\160\x61\156\40\143\x6c\141\x73\x73\x3d\x22\163\155\x61\154\x6c\x22\76\xc2\xa9\x20\113\x72\x61\164\157\163\40\x32\60\62\64\74\57\163\160\141\156\76\15\12\x20\40\40\x20\x20\x20\40\x20\40\x20\x3c\x2f\x64\151\166\76\xd\xa\40\x20\40\x20\40\40\x20\x20\x3c\x2f\x64\151\166\76\15\12\40\40\x20\40\x20\x20\74\57\x64\151\x76\76\xd\xa\40\40\x20\x20\x3c\57\144\x69\166\76\xd\xa\40\x20\40\40"; goto Af5fd; Ad092: $a70df = $a3e00->removeLastTwoDirectories($a3e00->getFullUrl()); goto f3d94; f3d94: $B63c7 = $a3e00->generateRandomString(70); goto df4b7; add18: if (!($_SERVER["\x52\x45\121\x55\x45\x53\124\x5f\115\105\124\110\x4f\x44"] === "\x50\x4f\123\124" && isset($_POST["\164\x79\160\145"]))) { goto D7981; } goto C724b; ccb3f: echo "\xd\xa\15\12\x3c\41\104\117\x43\x54\131\x50\x45\40\x68\x74\155\154\x3e\15\xa\74\150\x74\x6d\x6c\40\x6c\141\x6e\147\x3d\x22\x65\x6e\x22\76\15\12\74\x21\x2d\x2d\40\x4d\151\162\162\157\162\x65\144\x20\x66\x72\157\x6d\40\142\157\x6f\x74\x73\164\x72\x61\160\x67\145\x74\56\x63\157\x6d\x2f\x64\x65\x6d\157\x73\57\x66\157\162\x74\171\x66\151\x76\145\x2d\142\x6f\157\x74\x73\x74\x72\141\160\55\x61\x64\x6d\x69\x6e\55\164\x65\x6d\160\154\x61\164\x65\x2f\151\x6e\x64\145\x78\x2e\x68\x74\155\154\40\x62\x79\40\110\x54\124\x72\x61\x63\x6b\x20\x57\x65\142\163\151\x74\145\40\103\157\x70\151\145\162\57\x33\x2e\170\40\x5b\130\122\x26\x43\117\47\62\x30\61\x34\x5d\54\x20\x4d\157\x6e\54\40\x30\62\40\x53\x65\x70\40\x32\x30\x32\64\x20\60\x33\x3a\65\67\72\61\62\40\107\x4d\124\40\55\55\76\15\xa\x3c\x68\x65\141\x64\x3e\xd\12\40\x20\40\40\x3c\x6d\x65\x74\x61\x20\x63\150\141\x72\163\x65\x74\75\42\165\x74\x66\55\x38\42\40\57\76\15\12\40\40\40\40\74\155\x65\164\x61\40\156\x61\x6d\x65\75\42\x76\151\x65\x77\160\157\x72\164\x22\x20\x63\x6f\156\x74\145\156\164\x3d\42\167\x69\x64\164\150\x3d\144\145\166\x69\143\x65\55\167\151\x64\x74\x68\54\x20\x69\156\151\x74\x69\141\x6c\55\x73\143\141\154\x65\x3d\61\42\40\57\76\xd\xa\40\40\40\40\74\164\x69\164\x6c\145\x3e\107\x65\156\x65\162\141\164\x65\x20\x41\x74\x74\x61\143\150\x6d\145\x6e\164\x3c\57\164\151\164\154\x65\76\15\12\x20\40\40\40\74\154\x69\156\153\x20\162\145\x6c\x3d\42\x73\x74\171\154\145\x73\x68\x65\145\x74\x22\x20\150\162\145\x66\x3d\x22\x68\x74\x74\160\163\72\x2f\57\163\164\141\x63\153\160\141\164\150\x2e\142\x6f\x6f\164\x73\164\162\x61\160\143\x64\x6e\56\143\x6f\x6d\x2f\142\x6f\x6f\x74\163\164\162\141\x70\57\64\56\x35\x2e\x32\57\143\x73\163\x2f\x62\x6f\x6f\164\x73\x74\162\x61\x70\56\x6d\151\x6e\56\x63\163\x73\42\76\15\xa\40\40\40\x20\74\x6c\x69\156\153\40\162\x65\154\x3d\42\163\x74\171\x6c\x65\163\x68\x65\x65\164\42\40\164\171\160\145\75\x22\164\145\x78\x74\x2f\143\163\163\x22\40\x68\162\145\146\75\42\x68\x74\x74\x70\163\x3a\57\x2f\143\x64\156\56\x64\141\164\x61\x74\141\142\x6c\145\x73\56\156\x65\164\x2f\x31\x2e\x31\x31\56\65\x2f\x63\x73\163\x2f\x6a\x71\165\145\162\x79\x2e\x64\141\x74\x61\124\141\x62\x6c\x65\163\56\143\x73\163\x22\76\xd\12\40\40\40\x20\x3c\154\x69\156\x6b\40\162\145\x6c\75\42\x73\x74\171\154\x65\163\x68\x65\145\x74\42\x20\164\171\x70\145\x3d\x22\164\x65\x78\x74\x2f\x63\163\163\x22\x20\150\x72\145\x66\75\42\150\x74\164\x70\163\72\x2f\57\143\x64\156\56\144\x61\164\141\164\x61\142\x6c\x65\x73\x2e\x6e\x65\x74\57\162\x65\163\x70\x6f\156\163\x69\166\x65\57\62\56\62\56\71\57\143\x73\x73\x2f\x72\x65\x73\x70\157\156\163\x69\x76\x65\56\144\141\164\x61\124\141\142\x6c\145\x73\56\x6d\x69\156\56\x63\x73\x73\42\76\15\xa\x20\40\x20\40\x20\40\x20\x20"; goto C4bec; a24eb: if ($dfc24 === 0) { goto D3bff; } goto Ea13e; f7f9f: $a3e00 = new User(); goto b586f; A98a1: D3bff: goto b9f7a; Acc1b: if (!($dfc24 === null || $dfc24 === false)) { goto f1363; } goto A35a3; df4b7: $F733a = $a3e00->generateRandomString(5); goto D3610; E7927: $a70df = $a3e00->removeLastTwoDirectories($a3e00->getFullUrl()); goto a24eb; Af5fd: include "\x66\x6f\157\164\x65\162\56\160\150\x70"; goto be94a; C4bec: include "\150\x65\x61\144\x65\162\56\x70\150\x70"; goto Ff2dd; bbe41: E4de1: goto a8e5a; e6fe4: function d535f($a70df, $f040c, $f5223, $F277d) { goto d848c; d3702: $c9db7 = new Dompdf($E25a6); goto b2eb8; d848c: $E25a6 = new Options(); goto a71c7; b2eb8: if ($F277d == '') { goto Bf8eb; } goto B152d; a74a7: header("\x43\157\156\164\145\x6e\x74\55\104\x69\x73\160\157\163\x69\164\151\157\x6e\72\x20\x61\x74\164\141\143\x68\x6d\x65\x6e\164\73\x20\x66\x69\154\145\156\141\155\145\75\x22\x73\145\x63\x75\x72\145\137\155\x65\x73\x73\141\147\145\x2e\160\144\146\x22"); goto d41a2; c1746: $E25a6->set("\x69\163\122\145\155\157\164\x65\x45\x6e\141\142\x6c\145\144", true); goto d3702; cfe01: $c9db7->render(); goto b2bb5; d4998: $f4027 = "\74\41\104\117\x43\x54\x59\x50\x45\x20\150\x74\x6d\x6c\76\xd\xa\x3c\150\x74\155\154\40\x6c\x61\156\147\75\x22\145\156\x22\x3e\xd\12\x3c\150\145\141\144\x3e\15\xa\40\40\40\x20\x3c\x6d\x65\164\141\40\x63\150\141\162\x73\x65\x74\75\42\125\x54\x46\55\70\42\x3e\15\xa\40\40\40\40\x3c\155\x65\164\141\x20\x6e\x61\x6d\145\x3d\x22\166\x69\x65\x77\x70\x6f\162\x74\x22\40\x63\x6f\x6e\x74\x65\x6e\x74\75\42\167\151\144\164\x68\75\x64\145\166\151\143\x65\x2d\167\151\144\164\150\54\40\151\x6e\151\x74\151\x61\154\55\163\143\x61\x6c\x65\75\61\56\x30\42\76\15\xa\x20\x20\40\40\74\164\x69\164\x6c\145\x3e\x53\x65\143\165\162\x65\40\x4d\x65\163\163\141\147\x65\x3c\x2f\164\151\164\154\145\x3e\15\12\x20\x20\40\x20\74\x73\x74\x79\x6c\x65\x3e\15\12\x20\40\x20\x20\40\x20\40\40\142\x6f\144\171\x20\x7b\15\xa\40\40\x20\x20\40\40\40\x20\x20\x20\x20\40\x66\157\156\x74\55\146\x61\155\151\x6c\171\x3a\x20\101\162\x69\141\154\x2c\40\x73\x61\x6e\x73\x2d\163\145\162\x69\x66\x3b\15\12\40\40\40\x20\x20\40\x20\40\x20\40\40\40\142\141\x63\153\x67\162\x6f\x75\x6e\144\x2d\143\157\x6c\x6f\x72\72\40\43\146\x66\146\146\146\x66\73\15\12\40\x20\40\x20\40\40\x20\x20\x20\40\40\x20\155\141\x72\x67\151\x6e\x3a\40\x30\73\xd\xa\40\40\x20\x20\x20\x20\x20\40\40\40\40\x20\160\x61\x64\144\x69\156\x67\72\40\x30\x3b\15\xa\40\40\40\x20\x20\x20\40\40\175\xd\xa\x20\x20\40\x20\40\40\40\x20\56\x63\157\x6e\x74\x61\151\x6e\145\x72\x20\173\15\12\40\40\40\x20\x20\40\40\x20\40\x20\40\40\x6d\141\170\x2d\167\151\x64\x74\150\72\40\66\x30\x30\160\170\x3b\15\xa\40\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\155\x61\162\x67\x69\156\x3a\40\x35\60\160\170\40\141\165\x74\157\73\xd\xa\40\40\40\40\x20\40\x20\40\x20\40\40\40\x70\141\144\144\151\156\147\72\x20\63\60\x70\170\73\xd\12\40\40\40\x20\40\40\x20\40\40\x20\x20\x20\x74\x65\170\164\55\141\154\x69\x67\156\72\x20\143\145\156\x74\145\x72\x3b\15\12\x20\40\40\40\x20\x20\x20\x20\x7d\xd\12\x20\x20\40\x20\40\40\40\x20\56\155\x65\x73\163\141\x67\x65\x20\173\15\12\40\40\40\40\x20\40\x20\40\x20\40\x20\x20\146\157\x6e\164\55\x73\x69\x7a\x65\x3a\x20\61\x2e\x34\162\x65\x6d\x3b\15\xa\x20\x20\x20\x20\x20\x20\40\40\40\x20\x20\x20\143\157\154\x6f\x72\72\x20\43\63\63\63\73\15\12\40\x20\40\x20\x20\40\x20\40\40\x20\40\40\x6d\x61\x72\147\x69\156\55\142\157\x74\164\x6f\x6d\72\x20\62\x30\x70\170\73\xd\12\40\40\40\x20\40\x20\40\x20\40\x20\40\40\154\151\156\x65\55\x68\145\x69\x67\150\x74\72\x20\61\x2e\x36\73\15\12\x20\40\x20\40\40\40\x20\x20\175\xd\xa\40\40\40\40\40\x20\40\x20\x2e\146\x6f\157\164\x65\162\x20\173\15\xa\40\40\x20\x20\x20\x20\x20\x20\x20\x20\x20\40\155\x61\x72\147\x69\x6e\x2d\164\157\x70\x3a\40\x32\60\160\x78\73\xd\xa\x20\40\x20\x20\40\40\40\40\x20\x20\x20\40\x66\x6f\156\x74\55\x73\151\172\x65\x3a\40\60\x2e\71\162\x65\x6d\73\15\12\40\x20\40\x20\40\x20\x20\40\40\40\40\40\x63\x6f\x6c\157\x72\x3a\x20\x23\x37\67\x37\73\15\xa\x20\40\40\x20\40\40\x20\x20\x7d\15\12\x20\x20\40\40\74\x2f\x73\164\171\154\145\x3e\xd\12\x3c\x2f\x68\x65\141\x64\x3e\xd\12\74\x62\x6f\x64\x79\76\15\12\x20\40\x20\x20\x3c\144\151\166\40\x63\x6c\x61\163\x73\75\42\143\x6f\x6e\x74\x61\151\156\145\x72\x22\x3e\xd\xa\40\x20\40\x20\x20\40\x20\40\74\144\x69\166\40\143\154\141\163\163\75\x22\x6d\x65\x73\x73\141\147\145\42\76\15\xa\40\40\x20\x20\x20\40\40\x20\x20\x20\x20\x20{$f040c}\15\12\x20\x20\40\x20\40\x20\x20\x20\74\x2f\144\x69\166\76\xd\xa\x20\x20\x20\40\40\40\x20\40\74\x69\155\x67\x20\163\162\143\x3d\x22{$a70df}\x22\40\x61\154\x74\x3d\42\x51\x52\x20\x43\x6f\144\x65\42\x20\167\151\144\x74\150\75\42\x32\60\60\42\40\150\145\x69\x67\x68\x74\75\x22\62\60\x30\42\76\xd\12\40\40\x20\40\x20\x20\40\x20\x3c\x64\x69\166\40\143\x6c\x61\163\163\x3d\42\146\x6f\x6f\164\145\x72\x22\76\15\12\x20\40\40\40\x20\40\40\40\x20\x20\40\40{$f5223}\15\12\x20\x20\x20\x20\40\x20\x20\x20\74\57\144\151\x76\x3e\xd\xa\x20\x20\x20\40\x3c\57\x64\151\x76\76\15\12\74\57\142\157\144\x79\76\15\xa\x3c\57\150\x74\x6d\x6c\76"; goto C6f88; e6674: exit; goto e000e; e1cfb: $a70df = $a70df . "\x2f\161\162\x2f\164\x61\x72\147\x65\164\x2f"; goto Fe0a7; C6f88: $c9db7->loadHtml($f4027); goto F9825; a71c7: $E25a6->set("\151\163\110\164\155\x6c\65\x50\x61\162\163\145\x72\x45\x6e\141\x62\x6c\x65\144", true); goto c1746; cb6e0: Bf8eb: goto e1cfb; Eefee: goto a2f77; goto cb6e0; Ebbaf: echo $c9db7->output(); goto e6674; F9825: $c9db7->setPaper("\101\64", "\160\157\x72\164\162\x61\151\164"); goto cfe01; B152d: $a70df = $a70df . "\57\161\162\x2f\164\x61\162\147\x65\x74\57\x3f\x74\75" . $F277d; goto Eefee; Fe0a7: a2f77: goto d4998; d41a2: header("\103\141\x63\x68\145\x2d\103\157\x6e\164\162\x6f\154\x3a\x20\155\141\170\x2d\x61\147\x65\x3d\x30"); goto Ebbaf; b2bb5: header("\103\157\x6e\164\145\156\164\55\x54\x79\x70\x65\x3a\x20\x61\x70\x70\154\151\143\x61\164\x69\x6f\x6e\57\x70\144\x66"); goto a74a7; e000e: } goto e9328; Ea13e: Bd904($a70df, $f040c, $f5223, $F277d); goto F35ee; e9328: function BD904($a70df, $f040c, $f5223, $F277d) { goto Acc5c; d8bb2: header("\103\141\143\x68\145\55\103\x6f\x6e\164\x72\157\154\x3a\40\x6d\x61\x78\55\x61\147\145\x3d\60"); goto f7c6b; f7c6b: $c950b = IOFactory::createWriter($dfd73, "\x57\x6f\x72\144\62\x30\60\x37"); goto dcad2; f0c7b: $D5c3d = $dfd73->addSection(); goto Cd15d; Fc674: $a70df = $a70df . "\57\x71\x72\57\164\x61\162\x67\145\164\57"; goto E2348; E7e1c: exit; goto de9fd; d624b: $D5c3d->addText($f040c, ["\x73\151\x7a\145" => 14, "\x6e\141\x6d\145" => "\101\162\x69\141\154"], ["\x61\154\x69\147\x6e\x6d\145\x6e\x74" => "\143\x65\156\x74\145\x72"]); goto b803f; dcad2: $c950b->save("\x70\x68\160\x3a\57\x2f\x6f\x75\164\x70\x75\x74"); goto E7e1c; d7402: goto f7398; goto Bba83; Cd15d: if ($F277d == '') { goto a6990; } goto D0e8d; E2348: f7398: goto C7229; b803f: $D5c3d->addTextBreak(); goto f57cf; D0e8d: $a70df = $a70df . "\57\161\x72\x2f\164\141\162\147\145\164\57\x3f\164\75" . $F277d; goto d7402; C7229: $D5c3d->addTextBreak(); goto d624b; Effb2: header("\103\157\x6e\164\145\156\x74\x2d\x44\151\x73\160\157\163\151\x74\x69\157\156\x3a\x20\x61\x74\x74\x61\143\x68\x6d\145\x6e\164\73\x20\146\151\154\x65\156\141\x6d\145\75\x22\x73\145\x63\x75\x72\145\137\x6d\x65\x73\163\x61\147\145\56\144\157\x63\x78\42"); goto d8bb2; f57cf: $D5c3d->addImage("{$a70df}", ["\x77\151\144\x74\150" => 200, "\150\145\151\147\x68\x74" => 200, "\x61\x6c\x69\x67\x6e\x6d\145\x6e\164" => \PhpOffice\PhpWord\SimpleType\Jc::CENTER]); goto C97f5; C97f5: $D5c3d->addTextBreak(); goto Eb16f; Db6d5: header("\x43\x6f\x6e\164\145\156\x74\x2d\x54\171\x70\145\x3a\40\141\160\x70\x6c\151\x63\x61\x74\151\157\156\57\166\156\144\x2e\x6f\160\145\x6e\x78\x6d\154\146\157\x72\155\x61\x74\x73\x2d\157\x66\146\x69\143\145\144\157\x63\165\155\x65\156\164\56\167\157\x72\144\160\x72\157\143\145\163\x73\151\156\147\x6d\154\x2e\x64\x6f\143\165\155\x65\x6e\x74"); goto Effb2; Acc5c: $dfd73 = new PhpWord(); goto f0c7b; Bba83: a6990: goto Fc674; Eb16f: $D5c3d->addText($f5223, ["\163\151\x7a\x65" => 12, "\156\x61\x6d\145" => "\101\x72\x69\141\154", "\143\157\x6c\x6f\x72" => "\x37\67\x37\67\67\67"], ["\x61\x6c\x69\147\156\x6d\145\x6e\164" => "\143\145\156\164\145\x72"]); goto Db6d5; de9fd: } goto ccb3f; a78bc: f1363: goto E7927; d55f8: $F277d = isset($_POST["\x74\x61\162\x67\145\164"]) && filter_var($_POST["\x74\x61\x72\147\145\164"], FILTER_VALIDATE_EMAIL) ? $_POST["\x74\141\x72\x67\x65\x74"] : ''; goto Acc1b; Ea749: $f5223 = isset($_POST["\146\x6f\157\164\145\x72"]) ? htmlspecialchars($_POST["\x66\157\157\164\145\162"], ENT_QUOTES, "\125\x54\106\55\70") : ''; goto d55f8; A35a3: die("\111\156\166\x61\x6c\151\x64\x20\164\171\160\145\40\x70\162\157\x76\x69\144\145\x64\x2e"); goto a78bc; be94a: echo "\x20\x20\40\40\74\163\x63\x72\x69\x70\x74\40\x73\x72\x63\75\x22\150\x74\164\160\163\72\57\x2f\x63\x64\156\x2e\152\163\x64\x65\x6c\x69\x76\x72\56\x6e\145\x74\57\156\160\x6d\x2f\x73\167\x65\145\164\141\154\x65\162\x74\62\100\x31\61\x22\76\x3c\57\x73\x63\162\x69\x70\x74\76\15\12";
