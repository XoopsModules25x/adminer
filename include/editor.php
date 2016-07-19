<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.1
*/error_reporting(6135);$Jb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Jb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Ge=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Ge)$$X=$Ge;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\0�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\0=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	m���0eI��-:U\r��9��MWL�0��GcJv2(��F9�`�<�J�7+˚~���}DJ��HW�SN���e�u]1̥(O�LЪ<l��R[u&��H�3�v��U�t6��\$�6���X\"�<��}:O��<3x�O�8��>����C���1����HR��S�d�9��%�U1�Sn�a|.�ԁ`�8���:#���C�2��*[o��4X~�7j�\\���6/�09�\r�;��;V��n�n���މv��k�HB%�.k\">��[�\n���l��p�9�cFZ�s��|�>6 �5�l1V��ΐ�6����7��:�\"Az��de���\\�5*�մ��]�p[*�Am)Kt[�\n8g=;���2z���|���̣4�t8.���N#�ʲ��B\"�9���%���HQw�qd��F����\$&V��Q#�Q'��_�m�̡�� ���\r��h� Xrt0j5����W���4���ד�m����\"CA�F!�엖h>�b0�0�7;8�4Ka���	\0�p	a���HXF��1:�8�U9H��Ió�;�sQ�7F��cLpXM@e�����吞+g(��73O�3p��b�lEE>�Chb%�D�I8��E'�	#)�=%C��j�Y�1��y�h;cA��6�jK�\r���9�\$|������g-Z�o�\0���z���\$+D���V�w*�W��p�J���\\��F�O�'ɲa1�m,_ڧ\r��1�P�o�;\0�5����e\r& 3��^\r��6�MR2T\0���5?~�5����P>�85h��n�1;��\rRL8`�\\��@��`;z\n�\0�ԃ8��9R�yZP@�ib�?ƭv\$�<�%	A\r�?�\0�Sʥ��� �BÞ4JҨ��:�`#Hi�7ε�+}���v���o�J��Vڰ���9���W�2�Q�\r�T�D`��f�� ��w�L�����I]MKd7*rk*j\nAS��jF��-[ezz�r��ʁfU�3��~\\��Z��Z��{)��>>Ѓp���*����;zDb�w��]�mC\n���訓�KB��B���m@�����ִ>�����wU�*N�(ba�ƶ�@f�v�)��`�\0u�D)mD@/4����9j��������HBm1��I��5D��RuE��9��Aӗ=1b�0��e�y��1��s�;��������-�����]s��5�\\��\n1;���Q�^��b��i�;YJ2�d!s����#�kg�hށ]�W)>V��I�x]�r���;6�JLcpr��d{py�M��-�UVH�5'\nt��в�l���pH���o�e�Z�Ϩ��q�e��X�F�`Gy\r�!�Ww*����D��u�t%���d�Q��/�p�:�ih���t&���P��e,J͌��t�!�O�7��6�GgR���C[��sk�vqU�}y�h�AGV�����|�lF�ޅL^�.��]u&w�!��[jn��n��ڏ[k�C��v����k�rmOɭ��J>��WT�0����\n�pM�C����b�t��VG|oy8�����c�����");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n:��sa�Pi2\nOgc	�e6L����e7�s)Ћ\r��HG�I���3a��s'c��D�i6�N�����2H��8�uF�R�#����r7�#��v}�@��`Q��o5�a�I��,2O'8�R-q:P��S�(�a��*w�(��%��p�<F)�nx8�zA\"�Z-C�e�V'������s��q��;NF�1䭲9��G�ͦ'0�\r���ȿ�9n`�р�X1�݁G3��t�ee9��:Ne��N��OS�z�c��zl�`5����	�3��y��8.�\r���P��\r�@����\\1\r� �\0�@2j8ؗ=.��� -r�á��0���Q�ꊺh�b����`����^9�q�E!� �7)#���*��Q���\0���1���\"�h�>��������-C \"��X��S`\\���F֬h8�����3��`X:O�,�����)�8��<B�NЃ;>9�8��c�<�#0L����9���?�(�R�#�e=���\n���:*��0�D��9C���@��{ZO����8��i�oV�v�k�Ar�8&����..��cH�E�>�H_h����WU�5��1�r*����^�(�b�xܡY1���&XH�6�ؓ.9�x�P�\r.`v4�������8�4daXV�6�F���E�HH�fc-^=���t��x�Y\r�%��xe���Q�,X=1!�sv�j�kQ2��%�W?��Ů���=�dY&ٓ�VX4�ـ�\\�5���Xì!�}��N�gvڃWY*�Q��i&��l��ѵZ#����Ց\rA�\$e�v5o#ޛ�����5gc3MTC�L>v�H������<`���*�]�_��;%�;��V��i�����4X��'��`����i�j0g�O��ۥ�i���9�ƙےd�F���k/lŞ��n��c<b\n��8�`�H��e�}]\$Ҳ��� �!����C)�\$ ��A��`�\0'���&\0B�!�)���5E)�����o\r��8r`���!2�T��s=�D˩�>\n/�l�����[��ŠP��a�8%���!�1v/��SUcoJ�:�4J+�B���v�J��\r���b{��,|\0��z��c���Y��l�\n��i.��!��)��dm�J����!'��� B\nC\\i\$J�\"���2�+�IkJ���\$����G�y\$#ܲi/�CAb��b�C(�:��UX���2&	�, Q;~/��Ky9��?�\r6��tV���!�6�CP�	hY�E�������l�䏞(ؖT��p'3��C<�dc���?�yC���e0�@&A?�=��%�A:JD&SQ��6R�)A���b`0�@��u9(�!0R\n�F ��� �wC\\����υr��ܙ��#�~��2'\$� :��K�`h��@��Eb�[�~���� T��lf5��BR]�{\"-��\0��L>\r�\$@�\n(&\r��9�\0vh*ɇ��*�X�!_dj�����py������`�jY�wJ�\$�R��(uaM+��n�xs�pU^�Ap`ͤI�H�\n�f�02�)!4a�9	����EwC�����˩ �L�P����Ai�)�p�3�A�u����AI�A�Hu	�!g͕�U����ZU���c�*����M��xf�:��^�Xp+�V�����K�C#+� �Wh�CP!���;�[pn\\%��k\0����,ڨ8�7�xQC\nY\r�b��XvC d\nA�;��lF,_wr�4RP���HA�!�;��&^Ͳ��\"6;����=�#C�I���9f�'�:��DY!��B+�s�xV��8l�Ó�\"�鑃�H�U%\"Z6��u\r�e0[��p���a��.��� +^`�`b�5#CM�\$� �I��˚A�P�5C\r� S�d�WN6H[�SR�����\\+�X�=k��λ׺��S����r^(��oo�7����\\huk�lHaC(m����nRB��Uup��2C1�[�|ٽ�beG0��\"�CG��?\$x7��n��\$Z�=�ZӦ��si5�f��&�,�f�hi�I�y��n�2�0��DvE��T�x��M�{��`ܤ�GN#遂Z,�/�R\$�#\\I-	����|�0�-0��N�P�����;s-�v���҆���nwGt�n����di�H�|��4�(��+�v��&�Ņ�+K����L\nJ\$ԩ����:\\Q<WB\"^���WTIB~��q�ɞ��}�3�ο\":�U����|\r5n(n����� �7��O�D}B}�����\0\r�voܕ���؆_Jl�İ�H3�\"�[ĸ���K�A��`ߖ���N���&(�)\"� f�&�\0�� b��l��F�.jr����J�\"P<\$F�*�|f/�! �O��pR ���F#5g�b���8eRDi��0�P�+*�������k�Z;�pHh��l!�\0\r\nc�o�/��CB�<py�NTH�h�T�	�@��px�\$������48\n��#�NU,���\$P�m��YK��\"H�� �R�L�����D�\0����a�W�`p�����g���lP����o�:L���+\0 ]0�<)��N�xk\n(`c�+r�k{m\"�3.0��H1�e*ZoeB���9\r���\0RLi�Q�U�ԋ`��.����o:�d���T7Q��V ��Dh��W��S1�	��g�*2��,�W)��@�ϰT@C	Q(�,��4�#d<��\0�! �\$��2 {es��+�rʫ����JvY*�HPr\r����T�M\\\\`���v���<�&�n�D\\HH�oj^@��	��<񊆯��8��*#f�*��\r\nT� \\\r��*�T�^*��ɠ�\$�6o�7��Ree8� �粡,ҥ,�,`|9��K2�0r�+ҧ1R��\"� �*�P*��ȆM\\\rb�0\0�Y\"�\"�Ux���`������Q�E\r�~Q@5 �5sZ�^f�R@Q4�d��5�b\0�@�F�b/�8\"	8s�8�<@����l2\$Sh���\n�R\"U�43FNɫ7\"D\r�4�OI3\n\0�\n`�``��� Y2��ob�3��<n6�]<`��\"�� N�\"B2�Z\n��m���E�����\0����Zx�[2�@,��<P�?�\r�8#d<@��JU��K/E�;\$�6��S�DU	l;�,U�LΒ�7fcG\"EG��\$��\"E��3FHƤI���d�=e	!�UHБ23&j�Ȭ�*��%%�%2�,��JQ1H�l0tY3��\$X<C�t�4�_\$\0��>/F�\n�?mF�j�3�p�D��HK�v Ⱥɜ�\0X�*\rʚ��\n0��e\n�%��\ri���O��fl�N��M%]U�Q�Q�L�-��S±T4�!��U5�T\nn�di0#�E��M����i�.��/U���\rZF���j���;���H�☎d`m�ݩ���\n�t��QS	e��|�i����Qt� d�12,���DY�1UQSU��cd����E�)\\����L�	�F\$�@��V�{W6\"LlT��A�\$6ab�O��dr��Lp�c,��esΞ�<2�`�@b�XP\$3�����@˃P,�K�Vխ^����M��L���u�1��@�c��t-�(���`\0�9�n��2sb���/ �Fm�)���Hl5�@�n�l\$�q+�:��/ ���d��,��\n�޵�����.4���\$ �w0\$�d�V0���\"��r��W4678�VtqBau�pÀ�I<\$#�x`�wd�9�^*k�u�ofBEp	g2���f4 ��L!�r=�\0��\"	�\r<��h�������U�%T�h��Bk�#>�'C�p\n��	(�\r��2����\"3�l��Mԋ7�G�x.�,�Uu�%Dt� �w�y^�Mf\" �����(vU�3�u��J^HC_IU�YkS���c_ylc�c]rF���_q�%�W#]@�r�kv�3-�cy��VHJG<�Z��T�@V�8�\$�6�o�2H@�\r��ª\0��=�ݍ���\"3�9z��:K����u��K >����B\$�r�.�J��<K�G~�P�X��QMƹ	X��w\$;��mp�Zp�� �cK!OeOO�?�wp��懤�֠��L��I\n��?9xB�.]O:V����9��.�mW�\0˗s>�*�l'���k��o�ph���x�����v�L`w�1��� ��!�M�4\"�I\$��\"o�\$��>˙Bea\"��D�Bo�ʶ�+� B0Pxp��&��7�|p{|��}7ְ�\$-P�����@b����e����VYmoM�o�\0���Nzn*>�΄�)�����-H�l!����hp�g�� ����&tZ�㜤\0�!��8 ɩ���ZK��@DZG��������F�秩.� ��l��z%��(�x�}��'<��Ū(������<�XZǬ��њ� ɮg�����w��z�z{�e�'{;@噱(&���R�^E�ݛx�宛Y��\"���Mܒ��V��\n�5�zl�zr�[x��˪�����G\$O�W�@����Z�x�����,����be�� 	�f�dƻ�2��EË��I�D�YT�%�k�{�J�\\\r�U N �'�_��ɽ�f|w޵����,�l�7�kt�1R�D>�ЋX�Z��Њ�|y|Z{|�բ��\r��%;�#\0eK�	X�8&>7����rh�:�LL��K*6U/\0004��g��E�c\n�j�{V�[WF}#q �T��1ab��\n�1P��~��((f+W�?l��ъ�O���#Dc�8���Ɠ��k�\\@z�cϦl���1l�̗v~ՠ�(�L/cA%�#�bȄ4�4�������eZ2��-\r�|��1�ъ)��K�<`��)2�W���X\r��W��d�>��\ṋSX�}�\r��ゥE�R�(�����]`e9M�\0{�}��k+��˄�����}�*&�'p�������L�%D�}�wt��Gw���իo�����C��ל��S�����Н\r<&�B�8�m�&��");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$j;return$j;}function
adminer(){global$c;return$c;}function
idf_unescape($u){$Ac=substr($u,-1);return
str_replace($Ac.$Ac,$Ac,substr($u,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($xd,$Jb=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($xd)){foreach($X
as$uc=>$W){unset($xd[$y][$uc]);if(is_array($W)){$xd[$y][stripslashes($uc)]=$W;$xd[]=&$xd[$y][stripslashes($uc)];}else$xd[$y][stripslashes($uc)]=($Jb?$W:stripslashes($W));}}}}function
bracket_escape($u,$va=false){static$ve=array(':'=>':1',']'=>':2','['=>':3');return
strtr($u,($va?array_flip($ve):$ve));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Fa,$yc="",$bd="",$Ha=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Fa?" checked":"").($bd?' onclick="'.h($bd).'"':'').">";return($yc!=""||$Ha?"<label".($Ha?" class='$Ha'":"").">$J".h($yc)."</label>":$J);}function
optionlist($gd,$Qd=null,$Me=false){$J="";foreach($gd
as$uc=>$W){$hd=array($uc=>$W);if(is_array($W)){$J.='<optgroup label="'.h($uc).'">';$hd=$W;}foreach($hd
as$y=>$X)$J.='<option'.($Me||is_string($y)?' value="'.h($y).'"':'').(($Me||is_string($y)?(string)$y:$X)===$Qd?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$gd,$Y="",$ad=true){if($ad)return"<select name='".h($C)."'".(is_string($ad)?' onchange="'.h($ad).'"':"").">".optionlist($gd,$Y)."</select>";$J="";foreach($gd
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
confirm($Sa=""){return" onclick=\"return confirm('".lang(0).($Sa?" (' + $Sa + ')":"")."');\"";}function
print_fieldset($hc,$Cc,$Re=false,$bd=""){echo"<fieldset><legend><a href='#fieldset-$hc' onclick=\"".h($bd)."return !toggle('fieldset-$hc');\">$Cc</a></legend><div id='fieldset-$hc'".($Re?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($J=' class="odd"'){static$t=0;if(!$J)$t=-1;return($t++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($y,$X=null){static$Kb=true;if($Kb)echo"{";if($y!=""){echo($Kb?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Kb=false;}else{echo"\n}\n";$Kb=true;}}function
ini_bool($qc){$X=ini_get($qc);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$j;return$j->quote($P);}function
get_vals($H,$g=0){global$j;$J=array();$I=$j->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$g];}return$J;}function
get_key_vals($H,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$I=$k->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$k=null,$o="<p class='error'>"){global$j;$Qa=(is_object($k)?$k:$j);$J=array();$I=$Qa->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($k)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$J;}function
unique_array($K,$w){foreach($w
as$v){if(ereg("PRIMARY|UNIQUE",$v["type"])){$J=array();foreach($v["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}}function
where($Z,$q=array()){global$x;$J=array();$Vb='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$g=(preg_match($Vb,$y)?$y:idf_escape($y));$J[]=$g.(($x=="sql"&&ereg('^[0-9]*\\.[0-9]*$',$X))||$x=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($q[$y],q($X)));if($x=="sql"&&ereg("[^ -@]",$X))$J[]="$g = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$y)$J[]=(preg_match($Vb,$y)?$y:idf_escape($y))." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$q=array()){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$q);}function
where_link($t,$g,$Y,$dd="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($g)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$dd:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($h,$q,$M=array()){$J="";foreach($h
as$y=>$X){if($M&&!in_array(idf_escape($y),$M))continue;$pa=convert_field($q[$y]);if($pa)$J.=", $pa AS ".idf_escape($y);}return$J;}function
cookie($C,$Y){global$aa;$od=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$od[]=true;return
call_user_func_array('setcookie',$od);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($fb,$N,$V,$n=null){global$gb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($gb))."|username|".($n!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($fb!="server"||$N!=""?urlencode($fb)."=".urlencode($N)."&":"")."username=".urlencode($V).($n!=""?"&db=".urlencode($n):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($Fc,$Pc=null){if($Pc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($Fc!==null?$Fc:$_SERVER["REQUEST_URI"]))][]=$Pc;}if($Fc!==null){if($Fc=="")$Fc=".";header("Location: $Fc");exit;}}function
query_redirect($H,$Fc,$Pc,$Cd=true,$_b=true,$Db=false){global$j,$o,$c;$ne="";if($_b){$Yd=microtime();$Db=!$j->query($H);$ne="; -- ".format_time($Yd,microtime());}$Wd="";if($H)$Wd=$c->messageQuery($H.$ne);if($Db){$o=error().$Wd;return
false;}if($Cd)redirect($Fc,$Pc.$Wd);return
true;}function
queries($H=null){global$j;static$_d=array();if($H===null)return
implode("\n",$_d);$Yd=microtime();$J=$j->query($H);$_d[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H)."; -- ".format_time($Yd,microtime());return$J;}function
apply_queries($H,$S,$wb='table'){foreach($S
as$Q){if(!queries("$H ".$wb($Q)))return
false;}return
true;}function
queries_redirect($Fc,$Pc,$Cd){return
query_redirect(queries(),$Fc,$Pc,$Cd,false,!$Cd);}function
format_time($Yd,$rb){return
lang(1,max(0,array_sum(explode(" ",$rb))-array_sum(explode(" ",$Yd))));}function
remove_from_uri($nd=""){return
substr(preg_replace("~(?<=[?&])($nd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Wa){return" ".($E==$Wa?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($y,$Xa=false){$Gb=$_FILES[$y];if(!$Gb)return
null;foreach($Gb
as$y=>$X)$Gb[$y]=(array)$X;$J='';foreach($Gb["error"]as$y=>$o){if($o)return$o;$C=$Gb["name"][$y];$te=$Gb["tmp_name"][$y];$Ra=file_get_contents($Xa&&ereg('\\.gz$',$C)?"compress.zlib://$te":$te);if($Xa){$Yd=substr($Ra,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Yd,$Dd))$Ra=iconv("utf-16","utf-8",$Ra);elseif($Yd=="\xEF\xBB\xBF")$Ra=substr($Ra,3);}$J.=$Ra."\n\n";}return$J;}function
upload_error($o){$Mc=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(2).($Mc?" ".lang(3,$Mc):""):lang(4));}function
repeat_pattern($G,$Dc){return
str_repeat("$G{0,65535}",$Dc/65535)."$G{0,".($Dc%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$Dc=80,$ee=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Dc).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Dc).")($)?)",$P,$A);return
h($A[1]).$ee.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($xd,$kc=array()){while(list($y,$X)=each($xd)){if(is_array($X)){foreach($X
as$uc=>$W)$xd[$y."[$uc]"]=$W;}elseif(!in_array($y,$kc))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Eb=false){$J=table_status($Q,$Eb);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$c;$J=array();foreach($c->foreignKeys($Q)as$r){foreach($r["source"]as$X)$J[$X][]=$r;}return$J;}function
enum_input($U,$sa,$p,$Y,$qb=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Jc);$J=($qb!==null?"<label><input type='$U'$sa value='$qb'".((is_array($Y)?in_array($qb,$Y):$Y===0)?" checked":"")."><i>".lang(5)."</i></label>":"");foreach($Jc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$J.=" <label><input type='$U'$sa value='".($t+1)."'".($Fa?' checked':'').'>'.h($c->editVal($X,$p)).'</label>';}return$J;}function
input($p,$Y,$s){global$j,$Be,$c,$x;$C=h(bracket_escape($p["field"]));echo"<td class='function'>";$Hd=($x=="mssql"&&$p["auto_increment"]);if($Hd&&!$_POST["save"])$s=null;$Wb=(isset($_GET["select"])||$Hd?array("orig"=>lang(6)):array())+$c->editFunctions($p);$sa=" name='fields[$C]'";if($p["type"]=="enum")echo
nbsp($Wb[""])."<td>".$c->editInput($_GET["edit"],$p,$sa,$Y);else{$Kb=0;foreach($Wb
as$y=>$X){if($y===""||!$X)break;$Kb++;}$ad=($Kb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($Kb > f.selectedIndex) f.selectedIndex = $Kb;\"":"");$sa.=$ad;echo(count($Wb)>1?html_select("function[$C]",$Wb,$s===null||in_array($s,$Wb)||isset($Wb[$s])?$s:"","functionChange(this);"):nbsp(reset($Wb))).'<td>';$sc=$c->editInput($_GET["edit"],$p,$sa,$Y);if($sc!="")echo$sc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Jc);foreach($Jc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$t]' value='".(1<<$t)."'".($Fa?' checked':'')."$ad>".h($c->editVal($X,$p)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$ad>";elseif(($ke=ereg('text|lob',$p["type"]))||ereg("\n",$Y)){if($ke&&$x!="sqlite")$sa.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$sa.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$sa>".h($Y).'</textarea>';}else{$Oc=(!ereg('int',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$A)?((ereg("binary",$p["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$p["unsigned"]?1:0)):($Be[$p["type"]]?$Be[$p["type"]]+($p["unsigned"]?0:1):0));if($x=='sql'&&$j->server_info>=5.6&&ereg('time',$p["type"]))$Oc+=7;echo"<input".(ereg('int',$p["type"])?" type='number'":"")." value='".h($Y)."'".($Oc?" maxlength='$Oc'":"").(ereg('char|binary',$p["type"])&&$Oc>20?" size='40'":"")."$sa>";}}}function
process_input($p){global$c;$u=bracket_escape($p["field"]);$s=$_POST["function"][$u];$Y=$_POST["fields"][$u];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($s=="NULL")return"NULL";if($p["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads")){$Gb=get_file("fields-$u");if(!is_string($Gb))return
false;return
q($Gb);}return$c->processInput($p,$Y,$s);}function
search_tables(){global$c,$j;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Rb=false;foreach(table_status('',true)as$Q=>$R){$C=$c->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$j->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Rb){echo"<ul>\n";$Rb=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Rb?"</ul>":"<p class='message'>".lang(7))."\n";}function
dump_headers($ic,$Tc=false){global$c;$J=$c->dumpHeaders($ic,$Tc);$ld=$_POST["output"];if($ld!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($ic).".$J".($ld!="file"&&!ereg('[^0-9a-z]',$ld)?".$ld":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($s,$g){return($s?($s=="unixepoch"?"DATETIME($g, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$g)"):$g);}function
password_file($Ta){$db=ini_get("upload_tmp_dir");if(!$db){if(function_exists('sys_get_temp_dir'))$db=sys_get_temp_dir();else{$Hb=@tempnam("","");if(!$Hb)return
false;$db=dirname($Hb);unlink($Hb);}}$Hb="$db/adminer.key";$J=@file_get_contents($Hb);if($J||!$Ta)return$J;$Tb=@fopen($Hb,"w");if($Tb){$J=md5(uniqid(mt_rand(),true));fwrite($Tb,$J);fclose($Tb);}return$J;}function
is_mail($nb){$qa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$eb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$qa+(\\.$qa+)*@($eb?\\.)+$eb";return
preg_match("(^$G(,\\s*$G)*\$)i",$nb);}function
is_url($P){$eb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($eb?\\.)+$eb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}function
is_shortable($p){return
ereg('char|text|lob|geometry|point|linestring|polygon',$p["type"]);}function
slow_query($H){global$c,$ue;$n=$c->database();if(support("kill")&&is_object($k=connect())&&($n==""||$k->select_db($n))){$xc=$k->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$ue,'&kill=',$xc,'\');
}, ',1000*$c->queryTimeout(),');
</script>
';}else$k=null;ob_flush();flush();$J=@get_key_vals($H,$k);if($k){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($_a){$cb=256;$Aa=8;$Ja=array();$Id=0;$Jd=0;for($t=0;$t<strlen($_a);$t++){$Id=($Id<<8)+ord($_a[$t]);$Jd+=8;if($Jd>=$Aa){$Jd-=$Aa;$Ja[]=$Id>>$Jd;$Id&=(1<<$Jd)-1;$cb++;if($cb>>$Aa)$Aa++;}}$bb=range("\0","\xFF");$J="";foreach($Ja
as$t=>$Ia){$mb=$bb[$Ia];if(!isset($mb))$mb=$Ve.$Ve[0];$J.=$mb;if($t)$bb[]=$Ve.$mb[0];$Ve=$mb;}return$J;}global$c,$j,$gb,$kb,$tb,$o,$Wb,$Zb,$aa,$rc,$x,$a,$_c,$Zc,$qd,$be,$ue,$xe,$Be,$Ie,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$od=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$od[]=true;call_user_func_array('session_set_cookie_params',$od);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Jb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$_c=array('en'=>'English','ar'=>'العربية','bn'=>'বাংলা','ca'=>'Català','cs'=>'Čeština','de'=>'Deutsch','es'=>'Español','et'=>'Eesti','fa'=>'فارسی','fr'=>'Français','hu'=>'Magyar','id'=>'Bahasa Indonesia','it'=>'Italiano','ja'=>'日本語','ko'=>'한국어','lt'=>'Lietuvių','nl'=>'Nederlands','pl'=>'Polski','pt'=>'Português','ro'=>'Limba Română','ru'=>'Русский язык','sk'=>'Slovenčina','sl'=>'Slovenski','sr'=>'Српски','ta'=>'த‌மிழ்','tr'=>'Türkçe','uk'=>'Українська','zh'=>'简体中文','zh-tw'=>'繁體中文',);function
get_lang(){global$a;return$a;}function
lang($u,$D=null){if(is_string($u)){$sd=array_search($u,get_translations("en"));if($sd!==false)$u=$sd;}global$a,$xe;$we=($xe[$u]?$xe[$u]:$u);if(is_array($we)){$sd=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$we=$we[$sd];}$oa=func_get_args();array_shift($oa);$Qb=str_replace("%d","%s",$we);if($Qb!=$we)$oa[0]=number_format($D,0,".",lang(8));return
vsprintf($Qb,$oa);}function
switch_lang(){global$a,$_c;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$_c,$a,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($_c[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($_c[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Jc,PREG_SET_ORDER);foreach($Jc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$zd){if(isset($_c[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($_c[$y])){$a=$y;break;}}}$xe=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1712857100){$xe=array();$_SESSION["translations_version"]=1712857100;}function
get_translations($zc){switch($zc){case"en":$i="A9D�y�@s:�G�(�ff�����	��:�S���a2\"1�..L'�I��m�#�s,�K��OP#I�@%9��i4�o2ύ���,9�%Si��y�F�9�(l�GH�\\�(��q��a3�bG;�B.a�F�&�t�: T��s4�'�\n�P:Y�fS���p��e�,��D0�dF�	�[r)�+v��\n�a9V	�S�޴k̦�n�cj��ADS!�2rɜ���QB�s����}t���m�jl{�a2��j�2Bb<�A\"_?�2y���BA��H3�\rAE3.��4K`�;�H���\0��B��/��ʋ��Z�\$�P�97���1\rC,*\$�� ��#�ލ���<�t.0��\0м����s֐���L�F�\r��Z�)c�\$	К&�B��c̴<��������꠰K�\n)�#B0�CcU	R3���4�\"�)̰�5��pA��H�&�h7%�2���1�#��:��C�9��\"8@@�*1��\"ɭ5J�2J�8\r(�������D3�iD�;O\0�Y;�L��%J�)Z�<V�\$cB3����^��\\�Ak��+C8^�]c�\n�աxD�6��l���5�A𒪢�`��|����7��ӵ@<jk09;K얰�L#\rN���/��TBj\n@�����|(JD��S�L���BT�%ɀ���y���,&2'�}(��YB�n�1�P�7�C��	☨MK%)&��1Cl)��ڒ���ƾ\$�p��ջc4�2P,��؍���B��C=(��#;X�\0�*ekbB��#���\$��`�N,�|¦�}\$l�iUBOIGB9���r��v8���\n2%\$����p4��)u���\"�|��D�ޕM40��߸�r���g��3{�/�A�w3�S��/c��#�3o�T~�J�D}.��?���\r��1�p���	�6R0Ø`i�刘�p�\ni�m��*�@�A�Nm�d�����Cy�tʙ�VL��ƀI\$�1\r�Ag	�&�DF�\n&�02�(i\n�gM�67�d�s�	�7A�`�z��\nAbPs��m/%1��u	�+E5��a��@�����PC#����a��BG�46��\"�3�R\$�(�C�6&=W~xKGоL�@�Rd�c�̞P��";break;case"ar":$i="�C�P���l*�\r�,&\n�A���(J.��0T2]6QM��O�!b�#e�\\ɥ�\$�\\\nl+[\n�d�k4�O��&�ղ���Q)̅7lI���E\$�ʑ��m_7�Td������Q�%F����PEdJ�]�MŖiE�t�T�'템9sBGeHh\\�m(A��L6#%9�Q�JXd:&��hC�aΡR�Pcչ�z����n�<*���̡g\n9��%��h5ut.���QS��\n��Ķp{���l-\n��;�D��\n��n����I���f��g��gxu���l§�R�\"er�������1��Jpá����^��!P��nX�2��p���^qXb�C��V��)dE+.�NC?����	�u\r�\"�2m�~�?�����e{6�!���1H;�z�\\���4������ƪ!R�2os\n�?��8�����s��7��\$	К&�B��\rCP^6��x�0҃��	 ���w	�e���\$q���C���7\r2�b��#��5��r	V���S�����\"�+��>�l�(�!�\0�!����.�m\0�����%�<��Ų�'�l����C�7C��e��ˬ��Y2�L�rt�	yi�ѵ�Snv����0�c��9�(9��x�����4�C(�`��@4d�0z\r��8Ax^;�p�2\r�H݋�����: �\rØ�7��xD��3���^/�C`�7\ra|\$����2�����|҄(�4\r���7�\rp\r#�3�����v���?e\$)Jի�����K�@������J�\r���'@%\n%��.�:�Y^2u�e,�2��)�r���_�)s�p��m�n/��(	☨��5\"�T��\r�����[�*�'����s=���o7��J�\\�v�2���T\rR�sU�(	�n,��@1�a\0�؃{;�1���Q	��3���ieA*��il,y�7��xm#l\\;4���а(.��!abT�o7�e��t(QI\$0N�L���@+\n7�����s�9o.%�).�N߻�ea��L�C�i�-��6���d,Y�����Y�@V�p�]�/�\"��9�_������L�`P�#ljY�'*����lu\r.r����\0�+'A: �\n�l\r!�5��\0��a\r��2����CHf-�:p��hm�T)Zρ\0U\n���@�C�\r���:�s��Wĕ�R�{��I�h���U桨%D��M��߄�9�1����ө4�n�8�yU<p>F�(|�Ÿ F̠��s��a�s�y�R�'�����M��;�2\0�F|�U�A��J���P��2�L����]d�\$���C\n+�����e�gn����o�\$�]؄}35%'M{O(L4a��\0";break;case"bn":$i="�S)\nt]\0_� 	XD)L��@�4l5���BQp�� 9��\n��\0��,��h�SE�0�b�a%�. �H�\0��.b��2n��D�e*�D��M���,OJÐ��v����х\$:IK��g5U4�L�	Nd!u>�&������a\\�@'Jx��S���4�zZز�S��H�MS���]�O��E2��\\�J1��|�Ц[�i�L��_?�P��\n~b¨�#�m\r/����t7�B�'��C��]��sl����2G��Զ�抍��^TȘs����<\neU>���c��U�>ݣ�����S �L^>�#�²�4\nپjR������h���\r�*������O�~�1��d�+�*\\׬l���=�{��&�K^W2Kb���,.�*{ S�J��*�\"�d%ɯQQ�h\nϷ\r*\0�ʐ# H\"62:O�>��d¼Cq���1r#*B7\r�PH� iB�,k=/��{n������(��_\rA�{�K��\0��m���\$^���\n�/��q]`���j��-Œ�)G��\nLM�O�3���r��cK�D�ȥ�a@�sZ� ��r���Y~�њ�iӋ�R�o3����l�U�&Y�\nrZ-}м+�]�<����3�3�S1�x�\$Bh�\nb�:�h\\-�X��.�V�\0�=h�.���BUT��i��E�C`�9S2;j�B�z���B�b��#4�|�)�3*��^_߷=���2�F�G\$�l�MCj�:�\rw�,��씤�J,��B�>�<E��\"q3/�JZ�\r2�u�vD�L�o�qo���r�oug\n�������ҟ\\	V�;H�6�ڔ<\0�0�c��9�X9��x�6���4�C(���\r���C@�:�^���\\0��h�7u�wl3��(��p�9�#���9�(����0��XD	#h�6�o��/ ���0@���h\r�:�CXe�:;^_��.� ߠ6蝎Yn)G=�#�訔��\n (5�NaT�)���(F`Ar_�ѫ�V��	2E��-�����aF��� ��*,����J��?%�\rse�-�����^��ڙctd��T4�d蛃2@���\$�/�<�O�_(	�Ԡ�@xS\n�:B��L�I�lH�<����L�h�k��3�,� +x)E�	%�t���Je�<����D�rm���A\0c~��:�����A�3�\0�B` ���\0�^F\n���&�������(9��Hxv{+	&C�i:] �|�v��\\?OK\r�0�Ș�f(��@��f�Q�^����I����tO��TV�y2QR�%��\$�lѝ�)���动T0q�6�iby1��\\��8��v!�4����`4\r���2\\�C@i�!��X6ۣ�Ο�Q�V��ͩ�����D���<F�6y*��Dd�jţ�%��mk���H��R�fX紮����qߞ\nu8��P�hZe���~V��OKe\n3k���r��7\r��1����X |�g�`�:\r�,4�`���\n�2	���A\0b�O\\P��h8x1�@�˭}d�5;Rr��x70�l-%(o62�Vмk�|��>�Ջ���b�2e��Q��P�m�=&�إ��!{SU͵�N��'jT�Hxڮh�W!Cum���qG�\"3����0����*�T���\"�C�L\\����#T,����(�e�D�n���p8�,#j���r\"F�[���/�#���@wm���Z��]��x����Ka̗|j�M�9K\0��~S�\\�*7�(2u�s�\")���D�~�\n�����^�u���s<9)�պE<��`";break;case"ca":$i="E9�j���e3�NC�P�\\33A�D�i��s9�LF�(��d5M�C	�@e6Ɠ���r����d�`g�I�hp��L�9��Q*�K��5L� ��S,�W-��\r��<�e4�&&#��o9L�q��\n'W\r��hc0�C���1D̆�|�U:M��фS�`���X :�qgLnb� �� �S���n����R�I����CM~�1*N-t�'�d����r���� ��h�c�q�?\$�lႋS�8�eN��q3_9���3���m�p|+H(���`���8�7\r#Қ/�2���e��0H@�I��ӎ�(ꓣ�F���\0�<��HK��3�<�*��xH���엯\0Rh8�Cb;\r�H�6\r�'�J2ڙejm\n�#�h��H���B�@�1�fe\0HB �(�ꊴțP���Ȑ\$PT�p���:����C��,Cܻ/�!p)�C�>N�e\0PR���KR��/L\rll91�@�	�ht)�`P�2�h��c\rd0��R�A\rМ��\nt��ϧ\n3�6<pX�;��p�7�m8@!�b���N�2��93����	R�6��c1u�&�Aԫ�]�.�S#�����tT ��x���ĩO&p6Om �4��.�ۉ�h�@0��l���94� �`�k&���4�0��c���X`�l�h490z\r��8Ax^;�r>�Bi��3��>�Ҵ�H��K�J3�Yؾ���XD\"���\r��^0��bj�:�ښ�6k�?�Tt)x�*�L�A�R⺹��Ш{֣����( �z-���(P��-j�@�ʘѓ�Y��\n�6���tP'����\"�h@��nFȚ*)����<(�'�b�\r���0��Ql�Y��6�\rAȄ\n����p���R��;(��p��5�Y����7���:��z>�C�P@)�\"b���@#\n�e�I�O�3#\n��9/s�4�>�\"�M�Zl�-�%�rc�C-�<���AÑ\$O�i�7jz�a�o�̺�\"�rY9��B��GJ�-)܎5�\n��a84������9C1ˡ��b��,Q�V&�\"�) �a��(c�q=M�t���J��Dj	���c0i�\nJ5�\$(��3�\$K<��V�Xc~��\$TVClq�l] �b�1�Oሎ��@B�F��>(#�<bdT�B%'\r��sq��(�)c��ȡ��E�˚@�I_�\n_�\n�\$�U+sN����/�����h'4��0�1N|b��A�\"E �W�%���_�98Rʀ�>�>�k�'!��H�,�R\"�D\"T���{C��G@��DzB@H�<@#�)!	�F��,�0HT+�H�E\n\"�-:�7�@";break;case"cs":$i="O8�'c!�~\n��fa�N2�\r�C2i6�Q��h90�'Hi��b7����i��i6ȍ���A;͆Y��@v2�\r&�y�Hs�JGQ�8%9��e:L�:e2���Zt�\"=&��Q����ئ��*�EjT����k<��\0�Q��y5��Ǔ�\n(��Sl�L�_MGH�:�L=(����kT*uS���i��AE\\���a�f���y8ALDd��l0����4� b#L0�*`�tb&�F3((�i�����QNj�R���Sy��r4�JfS�xۺ\"�\r'IN�[�؂�]���\r#@ؑo�6\n��_�+2/\$F)B�-bs<�1�� 5�!(�C&��D�Đ�Bɬ�P�7?�s��pHF��<�C*(Íc ʢ(C��2���É���#[���`�h�0�\0P�!i�����|6�,8�\r2,<�L�Cx��K����#`@�������,�.\r�p!O#��0@e�ED���/4<�O����R40��l��G�B@t&��Ц)�C \\6����Y�B�2B57�I�#`�9H�P�b\"�ƚ���5��\0�)�B0\\N��v�2R6�Љ2=������%\n&��1:04;1Ȳ�5��8�����4cr�\\\nl1e�H�'P�R�����;7�����\"�89��v�ܣ��d�m�5��<0�i�@a�H�T(Yj*I���Ѝ\r��� 8��k��:@2���D4����x鉶�P��X�rR3����,�݉��0�C;����7\ra|\$��P��\râ���x�`�z&�*��EYM�0�(ɐʕ��~�P��L݈}����8`l�-�3(�ȉ1M}�1�\0�\$\n1��3�\n�R���!�NM�-��B��Xbwf1�6�&����BV�D�4#�W7�CL\$��-�|(	☩�68@-o�]�`*�E��c�~�\r��4�C0i�ԁ�v|��C��H=��XH \naD&RNU�ig2<��@H��m\r�ě`��N90u���?�4���(-ކ�8bO'9�����9����C�@C[~%=!uB�C�p�DS�O�a<�!T��4��E	p�0��VDR�\r�|P�Ӣ����e䑿F�]K��\n��'Ǹn�b9�\rpF�2~i�[0\r&�>F�#_`lwv%w��òE\rѽ@.B�{�3�QFzMF� ����=����/&%+S��O��@��\r��5� �&���#�d�����bJ�eN��-���q�4p\\ҰVd�T�6��Їd�̂�T��<�!Q)���NʙV��lQS�9N�)���=�U����=��햰dW�r\"Dȩ#\$l���a˲�N��d��\nۤ:&=4��Y���#k��06�8:��&G�34R/B����,�������!��a���\$��}�̄!�Ȑ�Z)�i�2���S�Z-:�\rf��zo��C�e��!X\no����R�.�� ��DN	�^�(�6���p";break;case"de":$i="S4����@s4��S��~\n��fh8(�o�&C)�@v7ǈ���� 3M�9��0�M��Q4�x4�L&�24u1ID9)��ra��g81��t	Nd)�M=�S�0ʁ�h:M\r�X`(�r�@g`�\\��*LFSe�f\n�g��e��S���n3�M'J�: �Cjس��R\\��C�v�\$��k'J�ʡ/4Hf�,�-��:ZS+�2���m�\"Ԙ鹓_�Ƴ.3pB��ԇ Q;�z;�\r`�9��m��0�t��\n\"�1f���9e(igg�o3�A_���+�c���b��\rÚH=\"�<��HKB	p<��p���\\��b��P����ģ,Ðȷ������@ �m\"B*��:�1��\"����6B�v����3Ȳ��x�F�p��1\0�15K���i�0����#rBH�3���1M�Tİ�CS��@t&��Ц)�K�cU5����\r����C��;�M��6I��;,��)�\0�7�a3������+a\0��\r��5A	�䷰���1���(2U��7��r�� -^Ǎ���ǌ1��;6�:�j1q��9��\n��k�Ԕ��c2ű��b�#u��B�X��h@ �K�8�#u�9'Q�`�&�|8>T��9��'��x0�D�3��:�^��h\\���\n=�8^����̄\$!xD�䖎�(�1#NXD	#h౼p��|���\0�Ԡc��'N`@ń�|���ۙ(��he�� *zw��c�@�:J9)�\n���(�v��a\0P�;����E�K*��t�'I�}u((6=7i�#`�3�J˟\0�-rgZވ30�Ke���x�*2	&@�\n8ޥւ��fM+��0��)Jc��Ԛ�m�h%sK���lh�%�-��:��rh,��@1�5v�7�sU�3����J9\\�#@���ci���`�w�r{&}����]\nI�O��X.��At=�Дé-J�]>1@�zm����BU  CM��.ƛ_��t�&�S�r,kQ\0��^�i{����\\�sn'�����G��::D)��N��VK���A4�����CzP_�\r&��V�Jn�(�q�yNψ��h�`SE@��P@B�F������p�g&��Abr��N��#\\��|�T�Œ����o�4����J	Q,%��,Bb\\��@ @)��s��#�A�C� ��==F��H��S\$Y\\�ʉ�������=H�����{4E(5�S\n�g�r�Ν�\\Ck%���2�		��fZ����eDs��q��-/K�vT`��9?�u��,0";break;case"es":$i="E9�j��g:����P�\\33AAD�x��s\r�3I��eM�����rI�f�I��.&�\rc6��(��A*�K�с)̅0 ��rة�*e��L�q��ga����y��g�M�:}D�e7\$��	�` L��|�U9��E\n��a�J�a��aO��lX�g7G\r�踂�H�Pb��E@�R�\r1����V4�\"�H��\ns:��:ɴ�\n9���Y^ � 4WL ��}��5�x(�e2��[���ra�xd���rE��+�}�˚C���Y�l�`7t�'#\$�@c���~ؙ�ʡ9��!� @1+8��B�܏(�����^p�b�2k��4�e���\r�R��н;�h�:B��/����C�\"��J�\"��`7<Q��9 �Ђ2\rL3��ðҽA��z�-����p0�+�̦�-�P��@P�\$Bh�\nb�2�x�6����=�\"�&=�x�\n��b6\r#���H�CR捎�)��U\n�xִ�)����\rP\\\n���;1�)�b6Č2{2��2�6��c��\nkRΧrxH8���@�0�Q�^�1�b0�2L��J#��8\r/��#+����R:.�6�;\$P��%ɂ��KN1�0�'Q�%��	�jΔh�;����pI%N1D�3��:��t��D8�s(9����c�[!xD�\$�;����`�5�A𒑣��|�#\r�����@�Si茶�)\"&��0��!l�j����[�f��\n@����\"L��B��h��hҪ�*n �\"Xzzt�1U���c�����1��N�%:�0��Ϥ&��)���M[���H�}S�� �=_�nh�&Ȫ+�s���-��Vl�cN�?Q�E�B���l(�Y8�L����&/��A-0������K�6���n�@.�֤K\rL� ��p7�wܶ��\r�QbJ��R7��~#��g��iI둲`�[^\0�������6#\r8:����Y�f�\0�s�}Q�.\$����W��r����d}!�6�4�*��C&J��w�C3��u�%�+\"�d&��V�@cn�\$;eX��A'3����\"`��O0mMe* @B�F�����\\ʹ0J�M�>f����`�Hx�Y\n�#����fڏ��-f0����az'���\"PҾ	�1��mu�I����x�	=�i�@�\$,%�U��Z0X��3�p�ʑ'��7�f�3������Ș(B����F�\$\"���@:ǝYttXy]Y���ΰ�`��'VjrM��b�\$��h�6�ę\0";break;case"et":$i="K0���a�� 5�M�C)�~\n��fa�F0�M��\ry9�&!��\n2�IIن��cf�p(�a5��3#t����ΧS��%9�����p���N�S\$��4AF��\n��EC	�O����T,̰ی�t0��#��v�GW����2e�ю�S��K�\rGS�@e��q�:�k\0�^\rF��<b4�D㩴�]���43�\rHe;d�Ƹl��e3���H(�`0��Eiy�� ON�z�R\n#�M�ۙһy&f��R�pt�]t&�MZ����@Q0�_��fPQ+l���X@�!�c��7cH�5?�*ʪ@LB<��P�7�A l��@�Bx�C��4�*V��B��Ō���4�KȨ�7\n3gB(Z����z����ʙ!1���1��l0��3d)�c\"�,\$�j��AL�tAɨ܏#�P�\$Bh�\nb����p�<�Ⱥ����\\R\r����2���8�c�ƣ�k��@���\0�)�B0X�/���:Z�\r��(�)��@4cd�\0�)xܞ��2j)����� ㄗ �e&�����\\u�޿Ya~3���68S�\\�QTíP��#*j\"��Z�93:\rg!n�ܛ�c�9d����<R�,4\\�0z0����x�%`9������ō����A�9TC��/�I�5�A�6�+�7��^0��\"��@ރ�p��ITkI��e��)�k4�#FTr��E��ſD[c��(h�K(�\n@R����&�%��.��k��m𽍋�*�܈X�l1�О)��m\r�%4�����ҙ0���ڳ�Y�[�%Ɇ�i;�R�%C@��r�蚋#}*1ʕ6R7��t(���&24��a\0�*k�0@�%c���ϕJ�鱫>�.�\r`�����[B���zu�h��l��2�j:�|b�nI��-F/�1C\\��:�GT\r\r�*+��ݪ\"�C�pKF-��YH*�&J8ƥ�&�L��2G���2�	:EK�\n4P`ɶc��٫T�Iy�n)}&��R��)�6Щ�8X?N�;����fG�l �����<cP�</�T*`Z�nl܅rj��)%<i���ԴMK!f#n`��ze̫�z�X6����_�=EJ)F��j�\\<J�x��r_�\\��h��5R}C*,\rdx6LI�|\$�vMp�W	L/(N3#�l�	�_*l�+����ZA'1��F�IQ*'#��h.�L�<E���@�jC��*�없�";break;case"fa":$i="�B����6P텛aT�F6��(J.��0Se�SěaQ\n��\$6�Ma+X�QP��d�BBP�(d:x��2�[\"S�Pm�\\�KICR)CfkIEN#�y�岈l++�)�Ic6�d\$B�!Z�-��~䌄�,V}�'!�����l���UUiZ�B@��qA���S�p��2�Q�B����B�#�S���T�Q:�HT�k���N!([��+����{�r ��0�J�@�`4��̖��Zl�I���㯕��ϸ����Z����m��aR�#Mg��V��v����J��9i�:A�Pl9�:��,i��-%L��+�^�\"�\"R�B�HK0��#*87\r�PH�� g��IX�,*�:��.LnS��\n�U\$�AR�1�B��H�.��0S���L;X��%B:θ-Q�Ȑ��*�P�4Sx��r�d�ܬ�� 9Hj�BC�{rB�)��\$��_D��@�K<��2���dB	@t&��Ц)�B��Q�\"�Z6��h�2-+\\\$��j��,H�{9�b҆�����9�\"T�8p\\�ɩS���3J6�\0�7�c(�b��#-6Sv�(�xU\$���VP���,���vS���e���K�*x�&lc�=��v*7��&�Z���Lc��	�\$��������+���8�f/b=ʊ�~��\r��Bh�9��(�x�;��<2���9�%�!\0Ѡ��D4����x海��6�#vdg#8_kk��b7cH�7�@:#��2��P�1\r��5�A�6�`�6�àx�!�9�\0�4\r���7�#\r�\r#�i�\r��Kl�,�,��?�C�Ϭ�kHS�HGT�\$V#��Q��M.�\nR�Ȏr��b@䩩\"	�j���LϏz�O:V��(��� x�l�2�J�����x1�3ߴ4j{=�P��Y%�Ӄc���ƪ�������O�\n#���=��\nr�&�,��tҽ\nI50�aH�\"~��o��1�`@[�oj���� ��\0S\n!0`�߁\0v\r-#@�	r\r-�g+C�o\r�m�f��P�\0(�`Xe�t�C���d�a�\"�{qD�?u�ϩ�D�]�\"F��c/���3�@a���3@�a�~m�!����1ma�4����+�������+�i�+�h���\$}���4�д��!&X����2�D\n}r)�D�H^,OQ�VD�\\J��(: �\n�l\r!�5��	!�a\r��2�� \\hi���G8�|�\r�՘\0�3Z� \n�P#�p�c�!�3��FIHh��,i\$K)�Og�ƞ�0�i�9�J���Tnx��c>\$9I3ԉ�*e���\\d���z܃�r��3�Xq����B��a[��?\"|U�bF�O\0��Q[#��%�&B ��C8\n���h4\0A d��\$�Yσ�z��VTA9�}�I��D�9Y�rL\n�.�h��GЂ�.�Y>!�)g�w�4�M��.@";break;case"fr":$i="�E�1i��u9�fS���i7�(�ff�D�i��s9�LF�(��'4�M��`�H 3Lf�L0\\\n&D�I�^m0�%&y�0�M!���M%��Srd�c3����@�r���23,��i��f�<B�\n �LgSt�d��'q��eN��I�\n+N��!�@u��0��`��%�S#t�ߝTj�jMf�B9���C����0#��N7�LG((����iƌV�C4Xj�h�n4�#E&�a:���]�V�5�a`Q�\$�i�m�[�M7Ө���A���8��_f4�� �����Ͼ�b����p:��(�:�c�6���(2xƁ�HKC�4<��p���^qxb\nC*f�F�ܔ%Id:a� P�9+/��?�\0007B�%�:9H��|�\nc���#l��6�a�Z5\r��z\"��4P�Da0�#:J�;Ϊ�6��˪DP���N�K>�O%L�7:��n�MCr�(�@t&��Ц)�CP���h^-�5(�.�Ψ�Ϯ� �ʻ��\$�H�V:��دɨd\"�\n�x���)��ڢ-(@ıi���U��7�ʲV6��b�&�@� Έ@�Si��֊;�Itu{zA(�8:5�XW�[�!l��i�PT 2��\r/�UCB\\��k�+O�@;�p��~7� \\������D4����x��#���\\���|3�3p�<7�v0�S����5�A�88\$����|С0��7Ã��96��5Ô�&�.���vR���i\$���{4�ihH�\$\n��8#�mr��\n�S�����9��rD�4xkrݤ��n\r�z䣪cR�:��?��U��;>��l���\\*8�'�b�v�\0�9/��V�##�1���u�I7x���7m�]��Ē6�2��/�O�U�Ɋ��b��Ê	���k��\r���K`@L)�����K�+����`X)�K��t*��C�Q.)�\$@ڟ��(XT�x4*C�z\r����1S`�%a�<B��Dx�Z�����baˋ�\\j5n�������B.x�\$B�I);mn,2vMIws�)6��jS\\\r�����`�q+GT���ʇ)�&��D\"�]�8�M\raJ��g�����!?��H����.^����V̐q/�89�.�\n!�>�L��I�\n��А���)T*`Zګ<����\$����1�Hy~sP썃d���M��\$%��C�H��a�'Qh�Jx~m�\"�,�!�j��i=fI�-�\\MH�\"��e���<�if���Rn��(���&C�̻���x�r��\0002�b�s@T;���٧�a�l3��L�4Ia�F���C@�Zyd#AQ��\0�E���2BB�";break;case"hu":$i="B4�����e7���P�\\33\r�5	��d8NF0Q8�m�C|��e6kiL � 0��CT�\\\n Č'�LMBl4�fj�MRr2�X)\no9��D����:OF�\\݆���Q�)��i��M�8,�Bb6f���Pv'3Ѻ(l����T��(=\nipSY��r5o��I��O�M\r�\n�b�\\�����~�Y��JӁ��S=E\r��\$RE ��M&F*D�����pTLr��o��ф�\n#�d��A�L��:�ѯ%ނ�F�%�MVY��R�棋(��7 �)�;�=�-�)�M\rI\n���(ȃ&��A\n\$PH�,Cp���\\��b	k ���%�4\r�\0�7�Cb�\r�3bʁC\\X�.x�b�.ؤ�H쿰Kr�\"��h�4��2=¢(9�����C�!�ntR�\rҰ�����i�L�ͥ\\�28At�2T�M�|�9�T�<��,�\r�#��5��8Ckf-�4��.��h\\2H,��\n���\r�(��N���KFS����)ɀ�7��Z�apA1�#\$a�CP��?Q�与{.߫�@��M�06��p�0��B�2�hP��\$9�5���*�6.�Ӆi��~��#*n&�6ݺ�)Q��)��`@����� ��c.O�W!�5rQXI��	����;œ��8\r*@�_��Ф��D4����tI�jԍ�`�� ��Ep�I\r=v�����6�D	#h���x�!��)1D��N�@�dԔ�\r�x��-���2,�繭h+�<��N���CB���j\n@��1���܊csR��t�'�n�M�����\n�O����=�3�����LZo)L�-q�\"��)�����5�F[\rn��9�����J2��`�\0�0ʪ�Y2�����(�&���:�����'����\nb���I�/�4�\"0��ڪ'�5O�����%�S�4�	B��(2s�(*�:(2���� �aS�Lw��io��3��0��hp�E<2���_+��y�f@r��]��7������!\r���A�,A6(�G(_�ߊD�������Tn1Xʰ�s�1�X�i)A3:X�da���j����.�:��.�#�|n1���0��Xc(�q�����`uM�B�@���4/���KP \n�P#�p�Y-A����,�[ZE��6=x���|����['�s\0���t��G�jC'����b[���Q`9B��a+y\$ ��#�(Ci=�����ݔՋNR%�v͉)EiX:s(�Ș�\$�q�DP��)xf\0:�0؈�HL}�X7J�)H �J�Y/��U\"�9ņ�\r�l^��}�`�z�z>��Y���.�YD��L�)4EkE��%\"�\\@PO/��8�-G]���Z)P";break;case"id":$i="A7\"Ʉ�i7��ᙘ@s\r0#X�p0��)��u��&���r5�Nb�Q�s0���yI�a�E�&��\"Rn`F��K61N�d�Q*\"pi���m:�决y���F�� �l��hP:\\��,���FQA��	�A7^(\n\$�`t:����X�e�J�J����Z儨�@p���H�S�h��i�����gK�����SD�G2��CH(�a3R�@�)��b4:=��\n&ʫ=��W@r6�#��wK1:�ZU��/�� �Z\$�Ơ���#i�8\$\0P�9�Z&\r#j���,�4��H����ʴ8�01\rL[d�\r#�~	��8\r#��%Űkԇ�0�f9\r	T(� ��!+��CCdo��3��O��	К&�B��c̴<��h�6�� �	p���p�H�)`P��6I8�܊�x֎��)�;,�\\F�@:���̱+�䦤�Dw;��=�+)|���HA�	�`4��`�N��\n�9��|(�@,�*��JX ��|�7P�Ȗ;,jNϥC��=c(�CU�@ cD43��:��t�㽼(Ppܓ�����@��,��^*)��2����1Q#XD	1Xث���x�!�\"�ރ@����|;��Ӿ��o*X\"��e<�\"��N9��r�XL}<(	�n���%2��\n8R��h��9d6:��(A*�XΝ'��Z�_�z�A�qr���#Z~ȥ�:�\nx�*cÒ�J�i�BC-M=6 h��Ļ�6�ϴ+�H�\r�0ҏ�̂��#{1����6\r���h☢&���P@#\n�S�?Ek4�r#��NS�.\"���IP��:�]C̓Gbu�����(�\\��,�,L�b�p购o:��p,Ls9��>����a�8�6����-��M�H��imno�a�C��_��Ğ���*\"�u脄b�K\$怏��K�\r��1�P�EJ��W����� yb\$�#!G�Vi3W`�*�@�A�\0p`�����HR.��>B�K8a\$I� �ԼKp\n}���2�B�GEԻ�r��MlCP甬��?	 nU�x�;��Q�\nf���Nq`��*��X�a|1N*UE\$Z!�D�8�NY�uM��F���DAQ�*ŀ@�b�s";break;case"it":$i="S4�Χ#x�%���(�a9@L&�)��o����l2�\r��p�\"u9��1qp(�a��b�㙦I!6�NsY�f7��Xj�\0��B��c���H 2�NgC,��u7��F����n0�D����b��%��e|�u0���;��`u�O��ڍRi67h�:M.�P�U��ZT4�0Q��铰��[�R�u�DADC\r�� �\\JgH���h2��U���R2��S|SXi��j{)�W\\�gv%	���\\2�9Ȯ\\�a=`6\$�}zJp2��&�ĝX;F#fY�hJd�5@O��󨂏?�(H�� g\0�(s��j��8����98�\\�%m����P������(�F���8�ܫBJh��)Kl �c(�Ҷ�P�� ��(�@���(�>��yH���(�v7�B@�	�ht)�`P�2�h��c��<��P�B�Z�\r�H�=&\$h\r�d4���*\r�Z*b��#)�(찍# �\rĒ�\r��\"1�J�!�QsL2��4P�4��9��ƨ�tZ\\��uC\0Ɍ�JF�U��B���[J���۴�:�#80��\0��\"Ȑ䚦)�Uu�47;4E\nP�j4���Ҩ9����\n���ZT`x�\r���C@�:�^���]&����+�8^��c�����xD,ÔN:^��H��XD	#h��=��^0��@�\r{���c�����lσ����[U�J�T/�Ґ�������(!���8+�3(�Jb9�Ġ��&��:���F\n\n:0�5���:��B�k#~��ƖÁ��☩F\nTJ�3�Q���PAH�5��4��mD7#�x��W�`,��@뤺P�7ɶ3�4��\0�(��� �0��#s��i��Z��� چO�͎:�T�~�	gv�w�4L�^\rT\"���ޣG�Z#�	�0ҏAvx����)�\r\"CY��B��xb1�NLP�J�+6'^\nk\r\r~ɂCŲ�r��c�\$%}Z��T��N�ݡD\$R�2kN���8�\0�)�=g�E�� DU\$eY���QQ��2�##�\0k`+i�1���1a+���.\0����sp�Æ�P�KC�T*`Z\n�nTHD3����Q�i�	\"Ew@l\"˱i��+�4^Ƀ�-\$���RN���?8�-@b*���R(t�d~Gkdq\0�2�}!�fA��-�vKNa�.!�:�#��\"�.�\r�>����E�&�ؕ��F!�i�@!��<�\"�\nc1���4�,��=˸�m���z��B�C8E�";break;case"ja":$i="�W'�\nc���/�ɘ2-޼O���ᙘ@�S��N4UƂP�ԑ�\\}%QGq�B\r[^G0e<	�&��0S�8�r�&����#A�PKY}t ��Q�\$��I�+ܪ�Õ8��B0��<s�W@�*TCL#�i\$\n�AG�S�,�ƀA���B�\0�U'�NE��ΔTF�(H2j?wE���dZ�ʼZ��0\$�M�_��pe4PA��:�Ω�Q�c�/)@��u������kPs�a\0M9�ʗ*y=J�+iy�]J�L�\\�d?mʈ�G{�\rUT���h4Dq_rAV�Ѵ�>U#��N��#��8D?�C��Y_�/�lr�j�H�/��A�*�^A\n�f����[:\$�(࣑J�q9�P�96W3La8s�\$2R�#+l7\r�PH�� g(���HN�Dŗe��B��L��ka[K\$\"�E���t�%��E1P>U���\\r����]-gJ	CG1_��*z[�g!vL#��OI\0@���C!Ȥ��%KSӌ����G����@�n���<!��CH�4-�5��.��h��\$D��iI�A��!2B`P�:O�2r�\\�1ZՐ%P�)�B4�>��A�1RS)\n�5̓d�MQ���#�c�]�H�n�(e�L�')F�֐-yؐ-��A`��#�5`��I2H<�����I,1�iS��)�1v�p@	u�D�h�9��(���;�㔈2���9� \\�@4j0z\r��8Ax^;�p�2\r�Hݡ�H���v�<h#p�4���D��3����/�C`�7\ra|\$����2�����|ڄ��4\r� �7�#�2�H�hCo���:ϴ-�Ү�2�A/uB���B��(3L�<�4M!z��\n�����2���S�kp��zȳ'�����f�\\)�R0����Lt����,D�֨ȵ�Q!^X���b��u�О¢�?��j I��!�Gu����)e4A�L9E�6lH�#2 D[�0���A����,M{�0Cxu�Â\0��{g\rX1���Q	��3��ij�*�� iq�%Ӻh��xm͡f؛��:G��D��DH�qd~����&š�D��T� ��kJDQJ��UB�T�6!�!v��ǹ\r��W1�\$ƈ�LQq�\09��A� ah-�4�J�\\(eu�dN�3/�\\f�L��5-�Ș!�<t�zl���NGx�%��b�\"��5�Xc\r��1��@�bP!�:�G>�\\�i��҇GZ�s�\r�ՠ\0��P \n�P#�p�c�!�3��J�TL�A��>��}#��lEB�ӊs�ЛIbv�<���A�.�AI��S&.��I����,��qe���'��s�S\"dmA�T�ZK��-�NP��!EE=�O	���Iz�D�|�R���m?�!�V��P|`�],�KM�����ℾ�`d���Ƒ�";break;case"ko":$i="�E��dH�ڕL@����؊Z��h�R�?	E�30�شD���c�:��!#�t+�B�u�Ӑd��<�LJ����N\$�H��iBvr�Z��2X�\\,S�\n�%�ɖ��\n�؞VA�*zc�*��D��\r�֊L�����=qv�kGZ�)Z�Zg���\\;�K�	X�M*dP�Z\nF�&R��(�����e1�vASb�+aN��s��0�Z�qO\"0V�&7���#��aژJܑ\n�\r�X!N�f%<�v%�b���B@�X��1�N�rY����U*e�ے^�J;P�\r������rBe�\0u�DC�\\:iy�[�\$��'Qjǔ	�N�rgA������Re9����22E��N��k�#+`7\r�PH�� g ��Yd@��EBbP.N!�P��8��r�.D!@v�o��T�e�Y��nv1˱+D�iz����e'�bF�L�\\�ʖ�pKLs+G?/�t�-KbDL��X�9�S�����[��>��c�D<��h�6�� ��p��H�d�F�\n���\r���.������vu�	��)�B2CK�	`E\nO��Q�[T絊Y��dv�I\n˥Sc~ӡ\rKV֨7%̜�1YFFZ	��UГQm]���aX��~��h�9��(�X�;��`2���9�%�!\0ю��D4����x��6�#vb�8^2����Ø�7�@:#��2��0�1\r��5�A�6�`�6烠x�!�^k���7��߲#X�\r#�!�\r�����L�<��-�.�ь�(	�2͓��P�4���͂H!,[p�,������c��'<sB��jB�=�\"d��%)x�\$Qf^ tZz�(\ry��E��S1��xB��)��Ei[?|tPB-eb��k	�V��n����xv��hu--�܅'<�K}��]��,��@1�A\0묍��@�Ci��)��0ik@�;�B���jH�4��*ܛ�A�6�\0�Ã�72h���4�j�\0�v�pޢDLh԰� 	|K;g����4���\$�'�,+p.ඈ�)ĉ\" ���;u��h0�#� �L\rkM,9�v��� aa�4����e^\"�\$8��E)bvD��)#cy��B̛/�:IO��Q��P'{�u���(�oB�\r��1����X h���[{jl��4�`���A�)�����\0bm��P��h8�1�@��\n� �,N���X�/�\rG��_Q��KɀN�rl;	�����#ؒvMP���Z�t�8�<�Lv�ؐH�q�+Œt9�)�XL����p>��mb��0��_0�Y�I�N:!`���zD(�t�	�֢������3�\$���m�J�)5'�i�\$@";break;case"lt":$i="T4��FH�%���(�e8NǓY�@�W�̦á�@f�\r��Q4�k9�M�a���Ō��!�^-	Nd)!Ba����S9�lt:��F%!��b#M&Q��i3�M��9����\r�Sq�6ib��\0Q.Xb��'S!�;��Mf�0��i�1�B�@p6W��B�rs����J1ΑJ������J��#�H(�k�TjzR!��a��PMD4�e�k�C���e�֦����l��̦�o�K�`�t� (�e2I��yvk9��R�>A�^�_�҅^Rj:���r�<v�a�Ɵ��T��C�ċ��B��� @�/�\0�h ΂A�T:- P�2��p���Zqj	#*������:�N�4�+���A�h�2�#�V��#���.�(�0�\n��!�H ��0证F!]/���:���4�J���,����NC\nڅ�L�P̅��46sZ	6���:MQZҒ;+�b\$	К&�B��c�<��h�6�� �'��{�����5��\0Ȥ��b�F\"��97�r�G�K�3�b��#4Cz4��\0�0�ɚ���U̫\r�z_Q��\"mQ3�PΰI �b�i{]M>LP�\r�J���K �C��B��CX��Q�<1[\n0��jIU=�PA	��J����`ί�2Cڛ?���o���5\$uz͆?��|%I�H�7:L�UrH�9��2���9;@x�\r���C@�:�^��\\0��j�U�ʰ���`�\r�H�7�D��p/�NC��H��\\� ��|Ǆh�4=U�ړ��U�jʒ	����1CN�,\r���/�\"-�ݍ��Њ@�ñ\$�ƄBt���^��3:V�?�j^��##Щ��,:����Яm�m�h�J���� ���#��\nx�*TX��?����n2�oٕ/h�\rh�@�.Jj��K�*7�Ű��o��p�å��w�P�7��\0�`�7��VhQ	�|4�2�T�\0F\n�M` �T\n�v/�|9���i\$J�3�T�V��J�)��\"F�:�J���2tC�kF��%�΍M+}p�'���\0h\"K}1��X��/3��8����y�k���'��˲aLq^,�D1�sfe	���`�D[xQu���H�H�ÍQ!�F�\nIz#p�\0��\n�z@��;���\n�p�4�Xc`!�5�����,�~%��j�Ʉ�����K��bb�P��h8�1����\$�����cq�#�b^���.�a���l׷��F��6�O��YH�Q�0�x����+ᩎ�)2�A�%<Ր�W��Fro*`@J|g,H�+��<���������.<���8d��hL��3��\$�VK0Z��ȩf��T���2��;0N�פ��H�\"E%@Ε��Mb)Equ�CC5�3�a��6i�%�\\4�-X�F`�";break;case"nl":$i="W2�N�������)�~\n��fa�O7M�s)��j5�FS���n2�X!��o0���p(�a<M�Sl��e�2�t�I&���#y��+Nb)̅5!Q��q�;�9��g�F�9��6��,�Fl�MSR���q���GSI��e�a\$#�O�7�#�1��D9׎c��αZ�Q����d�a�8Xm(�23[�,5\\6e*<�\$�y5�f\n\"P�[�|�\n*B䠢��i�#�	�X�;�p�3y�k2����.��d4�-Z���s7_������h:�.9\$ܗ�웘�\rH��7#�������;�)[��#�0�E�c�v7\r�PH�� g� P����r�;!��)�I[M+-���#��B\\�\"��k����:.��N��89	� 7�hԡ@B��,qt42Ȳ;-�I�i�3�4���`9S*�\rè\$	К&�B���\$�6����C�B�*�0���r�9��,|���`�9Fhl�%�/@�b��#'�h\\KOx�:�����Rv�!�\0�8+�,�у���I\"�0��\"j)���H#H��>��`�!(��*���g*3r��I�@���u^AЂܕ%��T+e⍭Θ�RI�n��C��o�O�*<�_U��\n���D���t��4&#j܆��P��y#.�+^%C����1(Cp��Hڗ���:�x�3��4\r�K�h(d\"GR2ߟ�����3\n�i��X(	���������Y\n�S'	Ӈ��b\$m3\n:Uun������'�b�Z2(xr�x:Jb���K5�������)O�WH�߿�m��kb3�*���#z\n1��\\�%8pĶ��&\r��ƍ8p�*lJڣ�ƺx̦'���7��L%1ɮ3m��p:9�\$��{ѽR��d��s��X�9��(�0�Q����d���}�6��G]�15	��9�t]\0�*8�P�+\"F������8�\\|I��'�d��w��ȁ)=,�=����hB,���hPMB�\r��5��B�̪��۝�*HS���i9�g��%(�D��P��h88��� �j��P IĤ�1^��+z��C�l�\"�`�G��6GH�!.�u�)B̥�CG`( �e�L�8R#��ݘ�HM�f��G�n���2�0�r��Pz^��(,���8t<���/�HLV�j%�l0��G�!7��*'�I��4����@T�Ea�L\"�t&\$ Ed-b97ڔ��%�)d��	�*r8��";break;case"pl":$i="C=D�)��eb��)��e7�BQp�� 9���s�����\r&����yb������ob�\$Gs(�M0��g�i��n0�!�Sa�`�b!�29)�V%9���	�Y 4���I���2��FSЀ�m4ǁD(�X�a��&�\0Q)�����G�<�zF��� :�O4���n2��v\\�\ne����B�U��W�\n�ҷ5'��t���(�u6�&3�@D0��\r�2T2Ω�KY��r����Q�oܝV�Q3JyL��y�U�l\r�)(�Ɣ��E���u5F\r7���0�����h(��	�Z99/(ȉ��0�5�HK�P��<���4a�c���Ih�pHEA�)�C�h5C8�=!�0ء�B��:?�Ҵ�R\0<��r��{h��!jz4����2#��ڹ	�\"\r��h�%&!\n�6cJ���Q��<�iJ<��#,�0ʁp7�\$��γ����s��%P�)�I���@�	�ht)�`P�\r�p�9T�������(I�\nbK\r���E��h�	�x����#�;�Jpֈ�)�p@)��\0��(T4���(�:��\n����S��M�+\$;��hڔi��M��Ώ((\"\r��:�h�4�A\0�\$\n	��(5��>�!b����#�L��Z�V�-o,�5�T�U���[�Z<�����9!n0�;��P�8\r0e6����D4����xҺ��As�3�膒< �p�4�!xD-��2����1Z�p��H�8\r�r :�x�3��@������H:!l�z�\râl�'!*˳(�jb�r� �pC{,=3��B_W���)������lL�? ��L:���.27s�\0P�*�7wo#:.� ��#[�[;�r����͎\r-��Î�Hr�,�����@����WV��0�6�l-�1@�ʜ���\0�ύ��ĳzDϨ�-����p�O�a�5?�T���o\$�l7��Ҹ (%�3�p��l��;�@��P�A��4���io��������&�I�\$\"���F 9�R>���3������>\r0�p:ȄQ��P,��g�M��H.\0� Ƞ\0wo�+�Z��a+1��5/�~KyqMGі>b�Z]a����|?�6��̍a��Ǣ�#Jb%��	�tx�=rg������b�OO���e��C� &N�'Ќ��ф�3�Xk*�|��P��;.	�(��r�	I&�A������T*`ZPni��rm(%TD ���d~Ǣr�1|�C��Jg*xls~&�I��S��nιo_	�\$�,J�hb#���:��J\"j�i<P��&�\n��VB�/ #�kĖA��\$I�ĝ?e*F�%���@�_�il�Xri�PW7��<��F��(L,1��V琄�Aӊl����\nW��Ȕ#\n�\r�7�ղ�hI�'H����\n���Bcaާ�`��\\����ԗ�mN��(3f��XІÀ";break;case"pt":$i="E9�j��g:����P�\\33AAD��� a�Dy���V������v4�NB���u4����QP�m0��sl�i6�̒Ӕ�c���2ЃE�L��\\�?��f�c	��o�F�9��a6D�Z���m&)��4�&J��U9ʁE��a�Jΰa�p 2]���t}je9Ү�}�j��\r5��P�̙�k1�����gX��]L���(�a�ID���C0���k_���Q�o�,|bf��\"��+��h���rcG�n�`�v���:���.���!� @1+p�P\"�ޏ,�7, j���(�hPƄ�IzЗ�a\0�7�k@'�NSJ��e:��\$c(Ư��\"���Ҵ��+8����\$����#r���i:SA	,|�\$�C�����0��̲��l��3�N0�\$Bh�\nb�2�x�6����=�\"��0GOX�G	S!-��c�IB�\n�x֓�)��; cc\\��|����2�6��bT��o�n�-ɣ��0ނ���Z&�\nD�3�V��Q�\\�L��l�6�و��8Iv@X���;����\\V�ڑ2� �&��`4��,b��t�x	��ܕ���;�R��j[� \\���o��D4����x�L['Ar�3��6:<2��p�K�T3���/�UP�5�A�6�t��x�3A���O|0�t���IĜ�&���44*�C\"ocZ�3@�2��@(	�p�K��\nXR��-\n�9��rb����꜎��U�'��oĹ�;�E��ʶWK�ˁ��]�,uao�i��'�b��I�E-�;�75X�2��j��ZRv��#��ݓ!%�)��cx��!-�ir�P�7�1(���{��X�8@)�\"c\r���@#\n�s(&�0�R��Q��h���RKOb��փ���޾]����?�z���Ic(d�&�u�Q*:i�X��u���&�خ5�EÁc%\n\r���C��v��46L�J�\r��S��O�fn�]�'HX�+P�|�>��� ��_!��%T\\��fe/�.�f��Sf�G��V�� �=5����%�l�U�qI)� ��@���h��\0\0�0-qޗ��ɢU���M8&�\$��&e�(�f�Y#F��\"HA�7w�Z�b誀QA ��Ʒ���>	�*�޳��yS�v1��^Ϡ3�_�Z���J��,�,a��P\0Ly��3�����b�GD�d�7��T�'xv�),\r��v��q�fo��#T;�,�fOS{=e�H�9��E\n��`";break;case"ro":$i="Ed&N����e1�Nc�P�\\33`�q�@a6�N�H؁��7؈3��� 3`&�)��l��bRӴ�\\\n#J�2�t��a<c&!� ��2|܃��er��,e��Β9���l�F�9��a�0�����z��&FC	�eV�M�A��b2��q`(�B��8#9�q_7��I�%��fNF���a������%���59��j��!U�ܨi8f��,��i�g�qC�rH\n\"]d��s`d&\r0}t�Lr0���pV��m�hE#+!6e0���Sy��t����q�i�q=�]�~�@P��+�H���I7��d8%���2�pR��o��7\r���\0��=�LAD�0�#*'A j��h�BF���\nƽ.@P��/����P�/Lp�����\nz�4l�9\r�pґnBd6=\"�(��T9��@�5i�ڋ�ʂ��rC ����(HRF�D#�2�3�8\\�(��?/���D�2�9�CJn츠P�\$Bh�\nb�2�p�6����W�\"��'n�-JS|�6>h��\"��#/�x�\ns\"4�O�\\<��>�c\n�4iZ�1�Ø�1�qro'�K���>(�:��������6�r^�ܲ�؏������3���1��@�=7l�8:����7����.�\$0�Ä	24o�@3��Ҹ	��9 �P�;�Q\n� �H@\$�B3��:��t�㾌(�4&9����ҲR�^/�:g���2\r�XD	#h��=��x�!�9�p�4\r�=��6=��B�&��*�D�B����+�.;\r+��A��LD��|-�o\"�A�\nXS���j~��-�?CXh����kD����9��HԱ6�S�E��{�x�*q0z���P@*RK������U	�˪d9㛊F���5������r��j�\r)�Q�B�:\$�`볳�\nOf����	B�0��`��nD+(9��J�M�Ț����9e+G`�;���A͓�����\"���t8~!)k�&���\n�|vd�͛Uf}��\nqx���@���~/�4jUCy,n0�\"�fC�tqṂ��`�h&�M0�8ě��|E�!�b=1�6F5u	�x ��㫠tNٍ1P����II&6�#:�x`�b�R�ȗ�#<H%�(!�\0�\n��a���0�ZJL��)\"��'6�X>`Il\n�P#�ph��\r����p���[fsA�E�i�n�Lʁ�Y��r2nH�|M���s�[\"�Q��#�䥑r`?'�2\"�V�D*s2\\��%�Z�\"���/u�g��l]��a\n�_\"I�d��R��y'�,�`�E�:�h��y2��j&D4}Ԁ�<_8z�%ԗ��ؗcBa��\"&��m��n���wK��B�h�c�LV(t";break;case"ru":$i="�I4Qb�\r��h-Z(KA{���ᙘ@s4��\$h�X4m�E�FyAg�����\nQBKW2)R�A@�apz\0]NKWRi�Ay-]�!�&��	���p�D6}E�j��e>��N�S�h�Js!Q�\n*T�]\$��gr5��9&��Q4):\n1� �K�I�Iзh���IJ�6H�B?!���([�&	����sD5AW�ꋬ�QcCXMe��1v��6Pe��:��C�ռƚi7\n����.,V���Ի����:��,�[�ӵ���7��ˑ��>��2S�jbF_#\$�@�/��T�:�q�G�%t�9�g��BhC�k\n��>P�����&��4'\0��B�@*,\\#%Ϛ\n[��\r�G�O�D�%���Hqi?J�.�+\r�\0�(��P�H:����̌�r3s.��~ȷa(��'I�7N�9��7;Gh8<����7�A j���2\\4�6��GOK�x�ELqkG���37Ry6���?����Shl�Ĉ�Z���?\$�<���9�MR�+j�\$(ELݚ���)pk~�9L�j���F���d*��\$�3�(��|_-����8Jy|&��������\\���:Feڐ^����/���\\�����⎦U0�r@��N\nI9�E�\n2���r�����Y���k:\\�X7c`�9DK:��̑���4�'C��)�B3N�B��z%U�\rrg���A�T�&�\"��+�������]�r���3W/͒Ax��Qz��.�p�#���MI��hÚR������Y�0�U����X��/�/���\0�JPT��r�᜻[ch�RA��\".��~�ˮ��72k�����:��@8xC��7�Sx�<H�2��`x0�G�3��:��t���# �4��(]��x�7~Cǈ7cH��A\0�C�g�����n\r`���`e\r��:�^A�n`�	�@��xt\r�p0���Htx�6��(\\�٦:d�ꕳ�e�ѝo)\\���6vW�s��tC1�\rPi>&�䕻#��\n+{;Gᆚ#H\nx).H����I�l�<������	�uĨ��r�a��B��\r��~\\]7DEh��\n�L����6�ڑ�DF�#�tR��[+�� �q�A\0P	�L*Ӓh飐J:F�Ƥ��0���h�i-&\$�я�5��~�\n��R�߻�Z���h��L���V��)� ��u�� =DE��A\0c� �:�\0��A�A�3�\0�B` ���\0�^�F\n�Bp���`{̅P�u �H��ϸ��rZ��9)&(ᄋ�A�R`%2��/���(-�E���B~a�%9T9��ʧ�k�V0��*\"dY�G��`4�A�w����0�G�M@02��!W�JT*p�������)*�v�:@4��ĢU*��Ua�����B0j�	��T�A'h���._W�i_����9�ɑf9Nj'�B	��`m��J��Ll�T���p���`+p%5D��f�s�_D�G9w	�y�;�W�.��aGӲ�����\0b��P��h8�1��ː�dg̘%5o#u���5P��t�}����VPZ�7~魛�u�\$�]	��`_��P[4&?�̇-Ë�JڴsS!�IPڰ�EAJϙ�6�� IO��%5*]+lvj��9��� x�Y�z�onl�G��`�؎���#0@0�Y̲լ�!v�&\r�5����B���B2o�K��d�\r�2�G�D�}��B�<^��z��]�H��u�W�NAԌ��/�xVq�\\]T}xovlY%ژ8�F�\rR�F�B����f�B7�2\rmX\nVK5��q\"";break;case"sk":$i="N0��FP�%���(��]��(a�@n2�\r�C	��l7��&�����������P�\r�h���l2������5��rxdB\$r:�\rFQ\0��B���18���-9���I��0=#\0����i�LALU��b�&#���y��D�	��k�&),�P9P�j�l�e9)��\$� ���f��k���4j�\\�Y��e%V*�v0��3[\rR :N�S�9� �\$µ��1�iH�'��̠��`r����b9��m2�#�2�\nfm�L���Oo:�u���H2�M�x�ؘcJ�9�b���?�4��r�Bs8��IZ5�a(�H ��P�<<��:5=��<� P�����\\��b��#B~���(5���ޟ����3�[&%�` �c�z�h�0��P�2(L��>�@�2<��|�1i\0��K���I�@���\nt^����-K�`\\�#`�=���P!-�����3�?�cE#IЬ�R�\$���\$Bh�\nb�2�h\\-�U��.��\$P�,3*��\"�28���!̂z9B(��?�x֜��)�pA:���ئȘ�:��\n(=E�S/�c��+�(�2���#O�5����\0��u�9�\0ܝ6��Cʈ����mx;7C��0�Af\\�ʙ`lS]���sc�c��JJb �+�S�R_`�;�t�8\r8%`��H2���D4����x鉶�xڴ2r&3����<2Cv,�M�:3�:p�18Cp��H�8'0��|ЄHЍ�<�i�e��Kh��:%+bܸH�n�x �	��Q���5��1�_��S��-���\npR��8>ĹX�-��zb7=Oz:u)�q��/�[mC��^۬�J9�lj���mn���jۊx�*!B�z5�o�6(A�^I��z�Z���Cz�ff,�Ԓ����Z)���⽰O� i�V��{�C��0�'�\0���\r�l�/���1�1����ޛ�&�Y�%�Z^�B�2�0�V��iN��DpJt:8D�61!Bj��a3���N���)�\$4E������'\r�9�X,G�t\r��7T��lM��=Bh��(�eE{���\n�������#iD�=�;\0��WD(VH�@D�{��<�g���)g�6�֢�[�z��昳�PX�G\"jAN�'��2n%!������`AT*`Z��#e�3���H�)Q����y�:�Qs`���o7f�a=�L8��6b`�S�Fo\n�:�\n\n�̺����#�zP������\$�mD�P�ΘVr┑����1I2H����^n]I�M�X���/B���!ǈ�7#�F�\ngO�(&A���=4����b�P��ZH�ʹ2�Q#�GH���LS�	d�t�p����\nnй#�|��^�Ⱥba\"��e()Tcxd:n'�t�";break;case"sl":$i="S:D��ib#L&�H�%���(�6�����l7�WƓ��@d0�\r�Y�]0���XI�� ��\r&�y��'��̲��%9���J�nn��S鉆_0����Th�g4Ǎ�i1��b2�%�\0Q(�z����՜�\n(���h�@u�����g��̒|T�xvR)t�&�f�K�wS1��5�M'�A;M�U0�u�XD�T�i��V	�\n&�d[�9��m2�P��N�6�ʰZ1�?5ܰ6|��� �A\\S���r4͵1OSj�@��a8ߐ�L���?1&#������RK��C�ʊ�`PH� i� P�ϡ+�֣I�t\nh�J��Bb��5� ʛ\r�4<=-@\"��h��Bx�C�2��P��5/;F7��j�#`Ի�	�V7(�;2Ǳ���/*�����0�J��-!i0����,؝�|̆\r��;G�SI@�	@t&��Ц)�C \\6����K�B�2=S��\$�+Ё����69QC�2�k�.��L0@�%���)�B0\\K,��� C246��X�3�5�C�^��#���c�XP��{������\$�8�3��K�E�n�T�cW]�+�2�.��쭽���Ԡ)}^��J��i\r#\\�6�\r�86���K��H��A\0x��(��C@�:�^��H]#:*��#C8^�fc�7cL��U�z3�9\0�1KcXD	#h�6�@�:�x�2#�@�\rUf���\"H��Q򡧥�\n=1�EM>�D��.�\"�ϣ%J�۩��\$\n\0P�(�L���|�7�I�f��L�QA1�,��\r3�������V�7^/Y��RqhT��vz\n��n���>��x'�b�v-lCS?\0��T�V���˧K�#�n�vL�,��@1�k��7��n1+�\0�(��\0�� MJn#\n��ů�\n����9͎I�^�O���O@�B�S�9.d������t?g\$�'�� A�c�ۓ��O�I/zH4-\"�9�i����ڈt\r��v�KN(�����(J��5-��uYF\r���Cce�1�%�����g˸S?-8�%���O�Y�&)�\rSAfO�d�&��b��\"����C�S�g��Q>�x���A��V��ky0X��|샬@F�,#>F�d9h���*�@�A��\r����f�)\"]i�:�h.I^�y\n����d�)e;	�\0&U�Z@����a�J�Y%!��r��.6x��,����)~��PˤF� �ZCc=!�Н�8�!��n����d�H�aF���Ji\nOI,09D-\"\$djkc��yϦ�F�j5��^ z	*J�l\$2Щb�S\n\r�����Y��K\$1*\nne��C�u<@��>-�4\0��3\rZJ��)ƢJ\0";break;case"sr":$i="�J4��4P-Ak	@��6�\r��h/`��P�\\33`���h���E����C��\\f�LJⰦ��e_���D�eh��RƂ���hQ�	��jQ����*�1a1�CV�9��%9��P	u6cc�U�P��/�A�k��\n�6_I&��N�~]�3%�&�h,k+\n�H��D�RIVow����>y�g�����	�4%�����U����B� �Z�5�Ŋ�W��i0I��A0��-y��#��損m֝G\\b��	'hi��E��Ƽ�IS%�����#X�s�h�HI�Js��N��X\$�S�����h�H��������'����)�#L��\nR��0����Rr�B����*�{/щ��;�[w���Ȃ2Q���\"��%��%H���ޤ��H��A j����qj1Fl4%��Y�Q!?\r��i̰�\r�fh��\\^�'*� �9L\"HJ��s��jHO6JP��\n�\"��k�:�<NКz`�+��\$�l�ߧ�S�hѭz�9��� At�T��Zj��uukX�HY^R�ik]Uy_*��F-�kZ�5'��h	@t&��Ц)�C �\r�h\\-�7��.�t�iʆ��P��S6�	�j\r���\$�*�B�K/\0)p@!�b���4��]1.�:Ɩ�ֻH���BN�*��H�|�3�o|B�[F�W��\"��������>�:����R#?!�\\�XGȎ�������ɥn9��`��Z���*KZ��/���.�m>�c��0�c��9��9��x�!����4�C-��@4p�0z\r��8Ax^;�p�2\r�Hݻ������wH<n�p�4��0D��3���/�C`�7\ra|\$����2��(��|�a�:\r|�:\r�p�5��\0�:o;�����[���kn����c��k��+��&�(@(	����J��	�n7g��D�ρ_3�ګ2	S�KS@���x���/�Hh�H�U�T2���S�BD))0ל8��\\&;o�'�0��_A3U���V\0D �)l��\$�f��*�90�#��i�7l`�Ѣ�+=�����o�\r0�%� �è n�W��� qA�4�p@L�4�0@�K��Q�;��^~{�n=� �Iw΁�Db�o�q*��e\$������D������Kr�ՠѳI��}�rlxF��)�&6�{�C�2L��i�\r�<שC�d-����3�����!�Ѕ��%o�TDnT��;�Y1�B�J�%�s�Ns�*��V�Ȗ��H���3\n�!���&%)�0��\nʥ�AMX�U��UZj���bɓ�B�t[a\r��VY1�S��E�<�S1����^�m��'��\0U\n���@�C�s���*��,')cmDf�����h�Qb:�K�H��)95l�6bj|\ns=+��A��`i�2� �T�YOF%�N��)3�H��{KCF���b-�1�Ťؔz]m^�F��J��6Q	3�\"��Z���E�;C	�ʣ�� ��{Wj�N��]����j��=�&���\r,=\n\r�An�ۅ�T(M�� �l5�D5�B���>Wa`'�Am���r1�";break;case"ta":$i="�W* �i��F�\\Hd_�����+�BQp�� 9���t\\U�����@�W��(<�\\��@1	|�@(:�\r��	�S.WA��ht�]�R&����\\�����I`�D�J�\$��:��TϠX��`�*���rj1k�,�Յz@%9���5|�Ud�ߠj䦸�����ɾ&{,��M���S_�Rj����^��8<�Z�+���e~`��- u�L��T�����&����R��	M��HI@�b�ҷ�����2x:M�3I��G�oe[���a���\\�JQ��a�r�^)\\�jr����qȮP\"���%r*W@h���)�����\0�\n��5��6�8��ځ�r��61aˑ�B��J�`F��XF��P)����7��Ɩ J��hf�4�J��КR�G������8�7��,��+�J#(��|�K0**>{ج�|*č��A�ԗ\n���9H˄O���\n��s�����YI���	��\\{CJ�����̿/��o4��t��T';?s��݄�\"���҈\\�ml�ش��Ñ��2�#p���^v�cƅu� ʜ��\nz��US�O@���/I���Gq����,�0C�=�+>�}�����/;�L�˭�8�7\$��>�l�V�f����	;9�m�ו�\rMZ��4G�a��H��u�{�)�:#��1�\"ƩM;����b*�0]_�����٢S�N\r����h�.:��Q�&dȦ�]\"WR���\$	К&�B��� ^6��x�<�Ȼw�Є�2���P#�9ɵ��_�N��Cd�w�Ţ�o>1DC��;>!�b���4�4��I:����H���rܽx\"8���>�yk�Լ-V���1�\"�2�bR�K�<kt�W)~�����&�G�檒���1,�NW���8��P�ʜ/o����	�B�ؾ�|��\\)���:�y��_�Rޛ�A{����vB�Yۻ *�a*w�9Pp	p�(��S�\".Q+�tb�i�2\0(&��xC� �9�p���e�4� �p ���|��\"\r�:\0t�xw�@���Ԇ��t7��E��x�!���@��:f�!|1���X\"�\$͆�4x��<���(t\r�]@� k��4�Hd��lo�\rL���\n!��<l���zK�p`((��R\"��\$��^}^SzB���JV�i�jD�<�؁[?~��Ъ��,a\n�aJ��x��2zN����lMd�r�`���w0�Øh�8C���K�9��?\"�VS�r0���LS��<��k��&�f\$��}��T��X�S?hY����'W��&l%���E�y�KM]ׯ&Fb�(g�3��C�a��7\0�C(c�nfPO��ɺ���x,���o��PA.L(��AKc� ��\"`�)�z�\r&n��UÒd\$b,ð����,���J4DfWh�����\\'\rr��Aհ��6���=u�q��zk{S}Ԓ���xCl�)Noϫ2`CY���Ȝ���ʼ�_��[�f�-G\r�̂��[�Ѧ?�j�%2�r4���C+�o��w/�msҝ������\$�-3���]����0~�<��%�8�Ԛ�tпT�l_-�v�jf�+�j�twՖ�#v�\\5�K�����hM�W�\$�l���Tv�Qw����)��\$���la�6�����h0���p�8m���3�\n�F\r5d6�X^�H`�*�@�A� <T���B��)-�*���6�T����8V[4��ro��-[׻F��fQ�ş*a%�T����G-����N`69���W�Hd��F�T�*p.�|p�<����c;.��.�xSC�Bش���`Q]	.ӵ�\$G\n��!_���QM>Y� ����j\$�`��#'u|�!�M�O����l�s�פ��^�C�2N�=�y�T4ӕ�K�N2�Ӫbp�aDɡ�n����6�A�������i�(�)�Yb�M��:���.���gU*M�8',�n�\$G�j/�u�͔59e�\rc������:(�9��s�w����DSR�8_D�m�6��]�˶����Ε5�9ʘ�Q͈�X�";break;case"tr":$i="E6�M�	�i=�BQp�� 9������ 3����!��i6`'�y�\\\nb,P!�= 2�̑H���o<�N�X�bn���)̅'��b��)��:GX���n�O����T�l&#a�A\$5��)\0(�u6&�Y�@u=\\Γ�\n~d�͍1�q�@k�\\��D�/y:L`��y�Oo����:ц�9Hc࢙��|0��:�I�Ze^M�;a��e�,\rrH(�S̦�a�FL4��:(�|�1��M&=�c����}˃�4�D)��a��t&Qgˇ�O���\$�Lt�~�/�*�2�o;N�A l���Ó�4\r&N10k:<���\n��i����B6��,\$�h���`��#��b�\r�p�\rip�E��:�?A\0�E��3%�`�4����0����\"9R4a�ZN�\r#l��\naЈ\"C�\"-�3H�.�����8a���֟<B�^�D�868� �)��� ��@b��#!\0�\0F��\\�(ڞ2#\\9,��䓈C\n�ԧ�/	N��>��#��2'�8���C�ڨ��Pʩ��v����؟V�Um\\WH�>9W�2g%�`@63���S��0�+�d�PЕ�0���4� P�0��\0�xc�J��������%.\"�E�3��:��t��J܏�(��8��ȍ�4j�AZ96�\n/�����H�8Di���|�.�(�7����ٍm��)�g��̰*�:J��\"U�:��\0�\$\ns�&\":��\n-#BP�>ɩʂ��\r�:R��ir?�HH�0�K�A\r�c��Xå���Vu�@&[6��׊�<� ������rO:\r�ZlϏ,�4(	☨ף�5��\r.�����`���cLԬ�<۠�*�<��@�#4�\\lU�ʤ��ޞl�\r����\0�(��\0̘%�J.#\n����˱_&h~���O������\ru��b�����1���b����02���Rq�7-������%��7`�Gñ0w��<�\0dY.ȴ�W�R�J&������Cɰ#��0��\n�,h�,5���!mH!��,\"a�s{�q\$ �nڤ\0HU����xD�t0e1�!NK I�6��VzQ�r�(#=�6r��B aT*`Z�cg�3�x��\"�{xL���R�9����.f� �@�IJ�ՖB���0)�|2B�t��]eb(��<W+h9E�ɔ�\$F��3z\\	�0�\$�.CJ[�\n�e�,���I)'��7�������D���X�>fx^+��Q8K\r�������� !����a�\\�,RX��Ha��,���³���*����";break;case"uk":$i="�I4�ɠ�h-`��&�K�BQp�� 9��	�r�h-��-}[��Z����H`R������db��rb�h�d��Z��G��H�����\r�Ms6@Se+ȃE6�J�Td�Jsh\$g�\$�G��f�j>������l�]H_F�M<�h����Ѩ�*�6�J�29��<Oq2��y���,*Q��=����\$�*!`,�b���eqQ�HZe���M�\\e��E3�¯�c���b��hR뽭E%�@�q���/�A�Hx�4��еq��#s�au��ƙ�\\{ �Y���K3E���\$E�4I��=J�G�E\n��oɠ��JbV�7*�4M;��p��:4O���@���F��\r�aE	Yx�\$zh�Fi��;��3j�P��*\n&2 ��ė�!,�ϧ1ܣ)�ы�K<��f�%�\0H�� g2�1;�D4��4�m:���L#���њ�'�NR�� *�@�ǈ\"��h�4��C�Z#D�bY��#t���p��S�ڐCL=��Γ)F��,�O.j��&(jO) ��`�AL���p��բ����^��r�|�˖�a)6%�dVjU�9Y�]��ZLM.���#�ˣIKEF�haѠR���\$P�JahZ��\\-��\n.�	,eU�,�B�)u� \r���;�J�\r�Ȑ�����0�)�B3!P!��\\�#�b��ˤF,\n����J�%e��D�3��o6M�`��1���Z���	H\n�/^ȶ�!&����%(4W��z���|�\r��s\n��j��aӋQ�U�\\�</���n����i���x�����u��E�y-�����B�\nzx&�#��2�A\0�̎c��9I�(�8\r#��2ea��\rP��C@�:�^���\\0��h�7s�wF3��(����9�#���9�(����0��XD	#h�6�o�:�x�9��:\r|�:\r���5��\0��RO7GGIQ�k��6Z4�)&�[�\0��-/�,�s�C٠(,ॼ3�NS���6�ܨ��TD{p8Mm�\\KZ��ANDvA\n!�.�N ��,!@K�6%\"6�!�d#DB�DVyE�+[�ɺ6�ZJ��)4,��b���akSD�V���B�!S?Ăb�h���<)�D膊I��iM(\\���)��hǒd��b<��3H��By1Ap�����	)�~'l��pTśYQ�D�A.O�o��1�\0@_8ox\0�׆ ��\0S\n!0e(�C�iu�*	x�`i|Ύ\0?���xm#p;<U2�KX[���HԴ#T�;ӈ�Br��YI�\$�\$��;Q�;�D��utZ��B���X1կp�N�(��	d�����\0�fK�{!�꿙p�z��4�Ǭ��,�2ld�J�g7�Z�h���6��Y\"6���	R��ʃ�\r���j��^T���+��J��&t�-��ޗ��W�z����jG+�bx�΄����&H�zȠ�5\\�\r�����Ń`+;l����bEMD��0��X��;i�)�|O4�~A��\0��^ \n�P#�pPc~�3��yBi���(�����,�	\\�#���a��LړE?,}���,Z�On�}��S���@H��&h*)��I�d㌬)�S���J����4вG(����)�7F��Eh���*9����VK@�c;�G��#��o�ud5�h�Ϻ��\0PL�A��a&����Y%�Z����`�}\n�+mq�#Lm�B-�Le2\$����K���E\n�\"4!��=��PT&���\$� ��H]�,��):�4ʣ���)���@��A�";break;case"zh":$i="�^��s�\\�r����|%��:�\$\nr.���2�r/d�Ȼ[8� S�8�r�!T�\\�s���I4�b�r��ЀJs!Kd�u�e�V���D�X�T��NTr}ʧE�VJr%С���B�S�^�t*���ΔT[U�x���_�\\��ۙ�r�R��l�	@FUP���J����u�B�T���dB�α]�S�2UaPK�R�Yr}̗[:R�Jڵ.�V)�+(���M�Q`S�z�s�ӕ�:�\0�r���Uꊶ�K��.u�YоH�S>;Ƒo	F���g:��L�W�X��:s�	�����Hחe��P�(x�6A�#(�\r�x!pH���ZH�9h�\$���B(e���iI��\$� �J�T ��@'1T���j�IW)�i:R�9T���Q	i�,pL��B�G�2���	'J	�8r�SBG5�\$	К&�B��c�<��p�6�� Ȗ�eA�J.r�#����F�#`�9%��E/R�ۤd�b��#	9Hs�\$b�t��l:M\$j��i*˜ԍ&@4��O��	4��)~B�e��QhI^�Y��W�,�\0C��c����,X@oՆ�U\rir��m6W2�h�9��(���;��2���9� \\�@4a�0z\r��8Ax^;�p�2\r�H��(���vX<_�p�4��pD��3���./�C`�7\ra|\$����2��h��|�a�:\r|:\r���5��\0�:`�ۡ��rĲ�+����s�|'A\0�\$\n�1S���!�B��,��[�\\�&G*h�'	�`sŭ3\\����D��E�.��I��	☩�5׺�z�	#L��#�@�/C���8@t��yz��(�vR2���:���Pߑ���4��\0�(��\0�4�a\0�4�B0���pxӤ�&��Cx�w��+s�(ȤAb�s���Z�ز�lZ x`9,�#�/�!K�1�-G����YK:�-O9�����`�4�v���\\z��2��@i�!���V�9�?�D��Qr-���:&4�q#��F�Q0\nR2\"́�;�\0L�D�E���G�s�k���LF�p���`+a�4�0���|��6V��kZ\r!�<� �ڂ3�l!�:��@�&T*`Z-r7vԛ!�#�W��,�H��Y#\n�ܕA͉�y��lV�(�JD� Eyt/¢D��\$�����)�\\�̯�\0^t-GH�;�<����dd��o���[5g1~���i�c�O7\$\"�H���Sr�)%2a+eP��̉0�w\np��B�e�=\"I1P";break;case"zh-tw":$i="�^��%ӕ\\�r�����|%��u:H�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�I&�G�N��AʤS�V�:	t%9��Sy:\"<�r�ST�.�����r}ʧE��I'2q�Y���dˡB��K��B�=1@��:R��U��w�Dy�D%��h�<�r�b)��e7�&�p��q��i�U�ʣS��0w�B\n�P�����*����iu-�>�L��)d��Z�s����t�t�4ȅ�]l�t-�����\0���m�g:�P�^+ܩ���p�t&a�Uz[s�Wr�--`\\��\n��d+���)v]%\n���\0�<��@��C��9�Cp���\\qj��ℰ���vs�z\0F���\\��đ�]�Rx� �i����|@�1&C����V�IZŮ��_�AU/E�v��Y@��2BJ��2^:\$\nZҿ3a\0@�Њ�@�R�v[49_*���\$Bh�\nb�-�4h�.��h��\$����ԏ\$�kBԶC`�9/E�t��b.���BhB�)�\0�7�l���gIF���񜤱]>�G-2s	�O��6�3��_��tEY�J��%�i�l�HY\$	�!�ey_X�a?��XJ�ɩ�C'AZD�h�9��@8`c��7�P�*8\r#��2�\0x0�F\$3��:��t��L# �4��(�a�8^�fl�1j\r�xE[#��2���1\r��5�A�6�`�6��x�!�<9���4\r��o��5�@4��>\\6�ڈ\\�,�0A%�q\ns	�Z��b�Dť۾s�y�G��x�\$\n��n��D)f\0����_u,��H�%�f��'1\\Z���|G�l	�Q6DQ@�򂀞)��<��)�T����\\j���a,֐�_ZPj�^���2�4��:���hߔ���4��\0�(��\0�4��\0�4�0�(|#t\"4�f˲}C��A\0se�ٗ6��*WB�lW.u���@�'��7�!�&ŢA���� ��p,W;XyO9�oE��Ǫ���a���0p�_{Ng�a����L��\r��[X�����~'M9Ü\\���s�A�;q*&	���1�D���\$&`�%�����#�P�A\"�X��>/�\0CTa��0�CkU�`��eV��������c��#>�C�BR)�\0�0-P79�;k�P�s�!�\\�#Dqt�����-����h�����K��K��� N٫d��F�ĂWÐ_��\0.M\rM�dr��c��\n	�|22��8�\$�b@��@!iK\"���'�0���Q��Z#R���2�n[ثȥ�It[Kyt\"1���SABR\0";break;}$xe=array();foreach(explode("\n",lzw_decompress($i))as$X)$xe[]=(strpos($X,"\t")?explode("\t",$X):$X);return$xe;}if(!$xe)$xe=get_translations($a);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$c;$sd=array_search("SQL",$c->operators);if($sd!==false)unset($c->operators[$sd]);}function
dsn($ib,$V,$F,$zb='auth_error'){set_exception_handler($zb);parent::__construct($ib,$V,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$Ce=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$gb=array();$gb["sqlite"]="SQLite 3";$gb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$td=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Hb){$this->_link=new
SQLite3($Hb);$Oe=$this->_link->version();$this->server_info=$Oe["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$g=$this->_offset++;$U=$this->_result->columnType($g);return(object)array("name"=>$this->_result->columnName($g),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Hb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Hb);}function
query($H,$Ce=false){$Rc=($Ce?"unbufferedQuery":"query");$I=@$this->_link->$Rc($H,SQLITE_BOTH,$o);$this->error="";if(!$I){$this->error=$o;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$G='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($G\\.)?$G\$~",$C,$A)){$Q=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Hb){$this->dsn(DRIVER.":$Hb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Hb){if(is_readable($Hb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$Hb)?$Hb:dirname($_SERVER["SCRIPT_FILENAME"])."/$Hb")." AS a")){$this->Min_SQLite($Hb);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$z,$Xc=0,$Sd=" "){return" $H$Z".($z!==null?$Sd."LIMIT $z".($Xc?" OFFSET $Xc":""):"");}function
limit1($H,$Z){global$j;return($j->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($n,$La){global$j;return$j->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($m){return
array();}function
table_status($C=""){global$j;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$j->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$j;return!$j->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){$J=array();foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$U=strtolower($K["type"]);$Ya=$K["dflt_value"];$J[$K["name"]]=array("field"=>$K["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Ya,$A)?str_replace("''","'",$A[1]):($Ya=="NULL"?null:$Ya)),"null"=>!$K["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$K["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);}return$J;}function
indexes($Q,$k=null){$J=array();$ud=array();foreach(fields($Q)as$p){if($p["primary"])$ud[]=$p["field"];}if($ud)$J[""]=array("type"=>"PRIMARY","columns"=>$ud,"lengths"=>array());$Xd=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q));foreach(get_rows("PRAGMA index_list(".table($Q).")")as$K){$C=$K["name"];if(!ereg("^sqlite_",$C)){$J[$C]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$C]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")")as$Ld)$J[$C]["columns"][]=$Ld["name"];$J[$C]["descs"]=array();if(eregi('^CREATE( UNIQUE)? INDEX '.quotemeta(idf_escape($C).' ON '.idf_escape($Q)).' \((.*)\)$',$Xd[$C],$Dd)){preg_match_all('/("[^"]*+")+( DESC)?/',$Dd[2],$Jc);foreach($Jc[2]as$X)$J[$C]["descs"][]=($X?'1':null);}}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$r=&$J[$K["id"]];if(!$r)$r=$K;$r["source"][]=$K["from"];$r["target"][]=$K["to"];}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
check_sqlite_name($C){global$j;$Cb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Cb)\$~",$C)){$j->error=lang(11,str_replace("|",", ",$Cb));return
false;}return
true;}function
create_database($n,$f){global$j;if(file_exists($n)){$j->error=lang(12);return
false;}if(!check_sqlite_name($n))return
false;$_=new
Min_SQLite($n);$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($m){global$j;$j->Min_SQLite(":memory:");foreach($m
as$n){if(!@unlink($n)){$j->error=lang(12);return
false;}}return
true;}function
rename_database($C,$f){global$j;if(!check_sqlite_name($C))return
false;$j->Min_SQLite(":memory:");$j->error=lang(12);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$q,$Mb,$Oa,$sb,$f,$ta,$pd){$Le=($Q==""||$Mb);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$Le=true;break;}}$d=array();$kd=array();$vd=false;foreach($q
as$p){if($p[1]){if($p[1][6])$vd=true;$d[]=($Le?"  ":"ADD ").implode($p[1]);if($p[0]!="")$kd[$p[0]]=$p[1][0];}}if($Le){if($Q!=""){queries("BEGIN");foreach(foreign_keys($Q)as$r){$h=array();foreach($r["source"]as$g){if(!$kd[$g])continue
2;$h[]=$kd[$g];}$Mb[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).") ON DELETE $r[on_delete] ON UPDATE $r[on_update]";}$w=array();foreach(indexes($Q)as$vc=>$v){$h=array();foreach($v["columns"]as$g){if(!$kd[$g])continue
2;$h[]=$kd[$g];}$h="(".implode(", ",$h).")";if($v["type"]!="PRIMARY")$w[]=array($v["type"],$vc,$h);elseif(!$vd)$Mb[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Mb);if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$d)."\n)"))return
false;if($Q!=""){if($kd&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$kd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($kd)))." FROM ".table($Q)))return
false;$_e=array();foreach(triggers($Q)as$ze=>$oe){$ye=trigger($ze);$_e[]="CREATE TRIGGER ".idf_escape($ze)." ".implode(" ",$oe)." ON ".table($C)."\n$ye[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$w))return
false;foreach($_e
as$ye){if(!queries($ye))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}if($ta)queries("UPDATE sqlite_sequence SET seq = $ta WHERE name = ".q($C));return
true;}function
index_sql($Q,$U,$C,$h){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $h";}function
alter_indexes($Q,$d){foreach(array_reverse($d)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Qe){return
apply_queries("DROP VIEW",$Qe);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Qe,$T){return
false;}function
trigger($C){global$j;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$ud){return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ROWID()");}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Od){return
true;}function
create_sql($Q,$ta){global$j;$J=$j->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$v){if($C=='')continue;$J.=";\n\n".index_sql($Q,$v['type'],$C,"(".implode(", ",array_map('idf_escape',$v['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($l){}function
trigger_sql($Q,$ce){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$j;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$j->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$fd){list($y,$X)=explode("=",$fd,2);$J[$y]=$X;}return$J;}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Fb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$Fb);}$x="sqlite";$Be=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$be=array_keys($Be);$Ie=array();$ed=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Wb=array("hex","length","lower","round","unixepoch","upper");$Zb=array("avg","count","count distinct","group_concat","max","min","sum");$kb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$gb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$td=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($vb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$F){global$c;$n=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$n!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Oe=pg_version($this->_link);$this->server_info=$Oe["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($l){global$c;if($l==$c->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($l,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$Ce=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$g);$J->name=pg_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$g);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$F){global$c;$n=$c->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",$V,$F);return
true;}function
select_db($l){global$c;return($c->database()==$l);}function
close(){}}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$c;$j=new
Min_DB;$Va=$c->credentials();if($j->connect($Va[0],$Va[1],$Va[2])){if($j->server_info>=9)$j->query("SET application_name = 'Adminer'");return$j;}return$j->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$z,$Xc=0,$Sd=" "){return" $H$Z".($z!==null?$Sd."LIMIT $z".($Xc?" OFFSET $Xc":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$La){global$j;return$j->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($m){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();$na=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){$U=$K["full_type"];if(ereg('(.+)\\((.*)\\)$',$K["full_type"],$A))list(,$U,$K["length"])=$A;$K["type"]=($na[$U]?$na[$U]:$U);$K["full_type"]=$K["type"].($K["length"]?"($K[length])":"");$K["null"]=!$K["attnotnull"];$K["auto_increment"]=eregi("^nextval\\(",$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$K["default"],$A))$K["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]);$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$je=$k->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $je AND attnum > 0",$k);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $je AND ci.oid = i.indexrelid",$k)as$K){$Ed=$K["relname"];$J[$Ed]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Ed]["columns"]=array();foreach(explode(" ",$K["indkey"])as$nc)$J[$Ed]["columns"][]=$h[$nc];$J[$Ed]["descs"]=array();foreach(explode(" ",$K["indoption"])as$oc)$J[$Ed]["descs"][]=($oc&1?'1':null);$J[$Ed]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Zc;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$A)){$K['source']=array_map('trim',explode(',',$A[1]));$K['table']=$A[2];if(preg_match('~(.+)\.(.+)~',$A[2],$Ic)){$K['ns']=$Ic[1];$K['table']=$Ic[2];}$K['target']=array_map('trim',explode(',',$A[3]));$K['on_delete']=(preg_match("~ON DELETE ($Zc)~",$A[4],$Ic)?$Ic[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Zc)~",$A[4],$Ic)?$Ic[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$j;return
array("select"=>$j->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($n){return($n=="information_schema");}function
error(){global$j;$J=h($j->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$A))$J=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($J);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($m){global$j;$j->close();return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$q,$Mb,$Oa,$sb,$f,$ta,$pd){$d=array();$_d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d[]="DROP $g";else{$Ne=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$d[]=($Q!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$_d[]="ALTER TABLE ".table($Q)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Ne!="")$_d[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Ne!=""?substr($Ne,9):"''");}}$d=array_merge($d,$Mb);if($Q=="")array_unshift($_d,"CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($_d,"ALTER TABLE ".table($Q)."\n".implode(",\n",$d));if($Q!=""&&$Q!=$C)$_d[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$Oa!="")$_d[]="COMMENT ON TABLE ".table($C)." IS ".q($Oa);if($ta!=""){}foreach($_d
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$d){$Ta=array();$hb=array();$_d=array();foreach($d
as$X){if($X[0]!="INDEX")$Ta[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$hb[]=idf_escape($X[1]);else$_d[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]";}if($Ta)array_unshift($_d,"ALTER TABLE ".table($Q).implode(",",$Ta));if($hb)array_unshift($_d,"DROP INDEX ".implode(", ",$hb));foreach($_d
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Qe){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qe)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Qe,$T){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}foreach($Qe
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$ud){global$j;$Je=array();$Z=array();foreach($O
as$y=>$X){$Je[]="$y = $X";if(isset($ud[idf_unescape($y)]))$Z[]="$y = $X";}return($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$Je)." WHERE ".implode(" AND ",$Z))&&$j->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){global$j;if(ereg(" rows=([0-9]+)",$j->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Dd))return$Dd[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$j;return$j->result("SELECT current_schema()");}function
set_schema($Nd){global$j,$Be,$be;$J=$j->query("SET search_path TO ".idf_escape($Nd));foreach(types()as$U){if(!isset($Be[$U])){$Be[$U]=0;$be[lang(13)][]=$U;}}return$J;}function
use_sql($l){return"\connect ".idf_escape($l);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$j;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($j->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Fb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Fb);}$x="pgsql";$Be=array();$be=array();foreach(array(lang(14)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(15)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(16)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(17)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(18)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(19)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$Be+=$X;$be[$y]=array_keys($X);}$Ie=array();$ed=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Wb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Zb=array("avg","count","count distinct","max","min","sum");$kb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$gb["oracle"]="Oracle";if(isset($_GET["oracle"])){$td=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($vb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$F){$this->_link=@oci_new_connect($V,$F,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
true;}function
query($H,$Ce=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$o=oci_error($this->_link);$this->errno=$o["code"];$this->error=$o["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$p);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$g);$J->charsetnr=(ereg("raw|blob|bfile",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$F){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$F);return
true;}function
select_db($l){return
true;}}}function
idf_escape($u){return'"'.str_replace('"','""',$u).'"';}function
table($u){return
idf_escape($u);}function
connect(){global$c;$j=new
Min_DB;$Va=$c->credentials();if($j->connect($Va[0],$Va[1],$Va[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$z,$Xc=0,$Sd=" "){return($Xc?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$Xc).") WHERE rnum > $Xc":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$Xc):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$La){global$j;return$j->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($m){return
array();}function
table_status($C=""){$J=array();$Pd=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Pd":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Pd":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$Dc="$K[DATA_PRECISION],$K[DATA_SCALE]";if($Dc==",")$Dc=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($Dc?"($Dc)":""),"type"=>strtolower($U),"length"=>$Dc,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$k)as$K){$lc=$K["INDEX_NAME"];$J[$lc]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$lc]["columns"][]=$K["COLUMN_NAME"];$J[$lc]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$lc]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
explain($j,$H){$j->query("EXPLAIN PLAN FOR $H");return$j->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$q,$Mb,$Oa,$sb,$f,$ta,$pd){$d=$hb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$d[]=($Q!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$hb[]=idf_escape($p[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$d)))&&(!$hb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$hb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Qe){return
apply_queries("DROP VIEW",$Qe);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
begin(){return
true;}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$j;return$j->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Od){global$j;return$j->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Od));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Fb){return
ereg("view|scheme|processlist|drop_col|variables|status",$Fb);}$x="oracle";$Be=array();$be=array();foreach(array(lang(14)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(15)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(16)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(17)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$Be+=$X;$be[$y]=array_keys($X);}$Ie=array();$ed=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Wb=array("length","lower","round","upper");$Zb=array("avg","count","count distinct","max","min","sum");$kb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$gb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$td=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o){$this->errno=$o["code"];$this->error.="$o[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$F){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$pc=sqlsrv_server_info($this->_link);$this->server_info=$pc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$Ce=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$p["Name"];$J->orgname=$p["Name"];$J->type=($p["Type"]==1?254:0);return$J;}function
seek($Xc){for($t=0;$t<$Xc;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$F){$this->_link=@mssql_connect($N,$V,$F);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
mssql_select_db($l);}function
query($H,$Ce=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($Xc){mssql_data_seek($this->_result,$Xc);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($u){return"[".str_replace("]","]]",$u)."]";}function
table($u){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($u);}function
connect(){global$c;$j=new
Min_DB;$Va=$c->credentials();if($j->connect($Va[0],$Va[1],$Va[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$z,$Xc=0,$Sd=" "){return($z!==null?" TOP (".($z+$Xc).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$La){global$j;return$j->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($n));}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($m){global$j;$J=array();foreach($m
as$n){$j->select_db($n);$J[$n]=$j->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$Dc=(ereg("char|binary",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($Dc?"($Dc)":""),"type"=>$U,"length"=>$Dc,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$k)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$j->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$f)$J[ereg_replace("_.*","",$f)][]=$f;return$J;}function
information_schema($n){return
false;}function
error(){global$j;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$j->error)));}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).(eregi('^[a-z0-9_]+$',$f)?" COLLATE $f":""));}function
drop_databases($m){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$m)));}function
rename_database($C,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$q,$Mb,$Oa,$sb,$f,$ta,$pd){$d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$d["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Mb[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$d["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Mb)$d[""]=$Mb;foreach($d
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$d){$v=array();$hb=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$hb[]=idf_escape($X[1]);else$v[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$v||queries("DROP INDEX ".implode(", ",$v)))&&(!$hb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$hb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$ud){$Je=array();$Z=array();foreach($O
as$y=>$X){$Je[]="$y = $X";if(isset($ud[idf_unescape($y)]))$Z[]="$y = $X";}return
queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Je)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");");}function
last_id(){global$j;return$j->result("SELECT SCOPE_IDENTITY()");}function
explain($j,$H){$j->query("SET SHOWPLAN_ALL ON");$J=$j->query($H);$j->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$r=&$J[$K["FK_NAME"]];$r["table"]=$K["PKTABLE_NAME"];$r["source"][]=$K["FKCOLUMN_NAME"];$r["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Qe){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qe)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Qe,$T){return
apply_queries("ALTER SCHEMA ".idf_escape($T)." TRANSFER",array_merge($S,$Qe));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$j;if($_GET["ns"]!="")return$_GET["ns"];return$j->result("SELECT SCHEMA_NAME()");}function
set_schema($Nd){return
true;}function
use_sql($l){return"USE ".idf_escape($l);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Fb){return
ereg('^(scheme|trigger|view|drop_col)$',$Fb);}$x="mssql";$Be=array();$be=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(15)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(16)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(17)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$Be+=$X;$be[$y]=array_keys($X);}$Ie=array();$ed=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Wb=array("len","lower","round","upper");$Zb=array("avg","count","count distinct","max","min","sum");$kb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$gb=array("server"=>"MySQL")+$gb;if(!defined("DRIVER")){$td=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$F){mysqli_report(MYSQLI_REPORT_OFF);list($fc,$rd)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$fc:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($rd)?$rd:ini_get("mysqli.default_port")),(!is_numeric($rd)?$rd:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$p];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($l){return
mysql_select_db($l,$this->_link);}function
query($H,$Ce=false){$I=@($Ce?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$p);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$Ce=false){$this->setAttribute(1000,!$Ce);return
parent::query($H,$Ce);}}}function
idf_escape($u){return"`".str_replace("`","``",$u)."`";}function
table($u){return
idf_escape($u);}function
connect(){global$c;$j=new
Min_DB;$Va=$c->credentials();if($j->connect($Va[0],$Va[1],$Va[2])){$j->query("SET sql_quote_show_create = 1, autocommit = 1");return$j;}$J=$j->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Md=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Md;return$J;}function
get_databases($Lb){global$j;$J=get_session("dbs");if($J===null){$H=($j->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Lb?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$Xc=0,$Sd=" "){return" $H$Z".($z!==null?$Sd."LIMIT $z".($Xc?" OFFSET $Xc":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$La){global$j;$J=null;$Ta=$j->result("SHOW CREATE DATABASE ".idf_escape($n),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ta,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ta,$A))$J=$La[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$j;return$j->result("SELECT USER()");}function
tables_list(){global$j;return
get_key_vals("SHOW".($j->server_info>=5?" FULL":"")." TABLES");}function
count_tables($m){$J=array();foreach($m
as$n)$J[$n]=count(get_vals("SHOW TABLES IN ".idf_escape($n)));return$J;}function
table_status($C="",$Eb=false){global$j;$J=array();foreach(get_rows($Eb&&$j->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||ereg("char|set",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$k)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$j,$Zc;static$G='`(?:[^`]|``)+`';$J=array();$Ua=$j->result("SHOW CREATE TABLE ".table($Q),1);if($Ua){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Zc))?(?: ON UPDATE ($Zc))?~",$Ua,$Jc,PREG_SET_ORDER);foreach($Jc
as$A){preg_match_all("~$G~",$A[2],$Vd);preg_match_all("~$G~",$A[5],$T);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Vd[0]),"target"=>array_map('idf_unescape',$T[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$j->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($n){global$j;return($j->server_info>=5&&$n=="information_schema")||($j->server_info>=5.5&&$n=="performance_schema");}function
error(){global$j;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$j->error));}function
error_line(){global$j;if(ereg(' at line ([0-9]+)$',$j->error,$Dd))return$Dd[1]-1;}function
create_database($n,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($n).($f?" COLLATE ".q($f):""));}function
drop_databases($m){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){if(create_database($C,$f)){$Fd=array();foreach(tables_list()as$Q=>$U)$Fd[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$Fd||queries("RENAME TABLE ".implode(", ",$Fd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ua=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$v){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$v["columns"],true)){$ua="";break;}if($v["type"]=="PRIMARY")$ua=" UNIQUE";}}return" AUTO_INCREMENT$ua";}function
alter_table($Q,$C,$q,$Mb,$Oa,$sb,$f,$ta,$pd){$d=array();foreach($q
as$p)$d[]=($p[1]?($Q!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($Q!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$d=array_merge($d,$Mb);$Zd="COMMENT=".q($Oa).($sb?" ENGINE=".q($sb):"").($f?" COLLATE ".q($f):"").($ta!=""?" AUTO_INCREMENT=$ta":"").$pd;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n) $Zd");if($Q!=$C)$d[]="RENAME TO ".table($C);$d[]=$Zd;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$d));}function
alter_indexes($Q,$d){foreach($d
as$y=>$X)$d[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$d));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Qe){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qe)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Qe,$T){$Fd=array();foreach(array_merge($S,$Qe)as$Q)$Fd[]=table($Q)." TO ".idf_escape($T).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Fd));}function
copy_tables($S,$Qe,$T){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Qe
as$Q){$C=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));$Pe=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Pe[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$j,$tb,$rc,$Be;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ae="((".implode("|",array_merge(array_keys($Be),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$tb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($U=="FUNCTION"?"":$rc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ae";$Ta=$j->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$Ae\\s+":"")."(.*)~is",$Ta,$A);$q=array();preg_match_all("~$G\\s*,?~is",$A[1],$Jc,PREG_SET_ORDER);foreach($Jc
as$nd){$C=str_replace("``","`",$nd[2]).$nd[3];$q[]=array("field"=>$C,"type"=>strtolower($nd[5]),"length"=>preg_replace_callback("~$tb~s",'normalize_enum',$nd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$nd[8] $nd[7]"))),"null"=>1,"full_type"=>$nd[4],"inout"=>strtoupper($nd[1]),"collation"=>strtolower($nd[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$A[11]);return
array("fields"=>$q,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($Q,$O,$ud){foreach($O
as$y=>$X)$O[$y]="$y = $X";$Je=implode(", ",$O);return
queries("INSERT INTO ".table($Q)." SET $Je ON DUPLICATE KEY UPDATE $Je");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ID()");}function
explain($j,$H){return$j->query("EXPLAIN ".($j->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Nd){return
true;}function
create_sql($Q,$ta){global$j;$J=$j->result("SHOW CREATE TABLE ".table($Q),1);if(!$ta)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($l){return"USE ".idf_escape($l);}function
trigger_sql($Q,$ce){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($ce=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(ereg("binary",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if($p["type"]=="bit")return"BIN(".idf_escape($p["field"])." + 0)";if(ereg("geometry|point|linestring|polygon",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$J){if(ereg("binary",$p["type"]))$J="UNHEX($J)";if($p["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(ereg("geometry|point|linestring|polygon",$p["type"]))$J="GeomFromText($J)";return$J;}function
support($Fb){global$j;return!ereg("scheme|sequence|type".($j->server_info<5.1?"|event|partitioning".($j->server_info<5?"|view|routine|trigger":""):""),$Fb);}$x="sql";$Be=array();$be=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(15)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(16)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(20)=>array("enum"=>65535,"set"=>64),lang(17)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$Be+=$X;$be[$y]=array_keys($X);}$Ie=array("unsigned","zerofill","unsigned zerofill");$ed=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Wb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Zb=array("avg","count","count distinct","group_concat","max","min","sum");$kb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.7.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"".lang(21)."";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin($Ta=false){return
password_file($Ta);}function
database(){global$j;if($j){$m=$this->databases(false);return(!$m?$j->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$m[(information_schema($m[0])?1:0)]);}}function
databases($Lb=true){return
get_databases($Lb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(22),'<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(23),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(24)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(25))."\n";}function
login($Gc,$F){global$j;$j->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($he){return
h($he["Comment"]!=""?$he["Comment"]:$he["Name"]);}function
fieldName($p,$id=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($he,$O=""){$b=$he["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$O).'">'.lang(26)."</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$ge){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$y=>$X){$C=$this->tableName(table_status($y,true));if($C!=""){$Pd=preg_quote($ge);$Sd="(:|\\s*-)?\\s+";$J[$y]["name"]=(preg_match("(^$Pd$Sd(.+)|^(.+?)$Sd$Pd\$)iu",$C,$A)?$A[2].$A[3]:$C);}else
unset($J[$y]);}return$J;}function
backwardKeysPrint($xa,$K){foreach($xa
as$Q=>$wa){foreach($wa["keys"]as$Ma){$_=ME.'select='.urlencode($Q);$t=0;foreach($Ma
as$g=>$X)$_.=where_link($t++,$g,$K[$X]);echo"<a href='".h($_)."'>".h($wa["name"])."</a>";$_=ME.'edit='.urlencode($Q);foreach($Ma
as$g=>$X)$_.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($K[$X]);echo"<a href='".h($_)."' title='".lang(26)."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$p){if(ereg("varchar|character varying",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($L,$Ob){$J=$L;foreach($L[0]as$y=>$X){if(list($Q,$hc,$C)=$this->_foreignColumn($Ob,$y)){$jc=array();foreach($L
as$K)$jc[$K[$y]]=q($K[$y]);$ab=$this->_values[$Q];if(!$ab)$ab=get_key_vals("SELECT $hc, $C FROM ".table($Q)." WHERE $hc IN (".implode(", ",$jc).")");foreach($L
as$B=>$K){if(isset($K[$y]))$J[$B][$y]=(string)$ab[$K[$y]];}}}return$J;}function
selectLink($X,$p){}function
selectVal($X,$_,$p){$J=($X===null?"&nbsp;":$X);$_=h($_);if(ereg('blob|bytea',$p["type"])&&!is_utf8($X)){$J=lang(27,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$J="<img src='$_' alt='$J'>";}if(like_bool($p)&&$J!="&nbsp;")$J=($X?lang(28):lang(29));if($_)$J="<a href='$_'>$J</a>";if(!$_&&!like_bool($p)&&ereg('int|float|double|decimal',$p["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$p["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($X,$p){if(ereg('date|timestamp',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($M,$h){}function
selectSearchPrint($Z,$h,$w){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$wc=array();foreach($Z
as$y=>$X)$wc[$X["col"]]=$y;$t=0;$q=fields($_GET["select"]);foreach($h
as$C=>$Za){$p=$q[$C];if(ereg("enum",$p["type"])||like_bool($p)){$y=$wc[$C];$t--;echo"<div>".h($Za)."<input type='hidden' name='where[$t][col]' value='".h($C)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$y]["val"],($p["null"]?0:null))),"</div>\n";unset($h[$C]);}elseif(is_array($gd=$this->_foreignKeyOptions($_GET["select"],$C))){if($q[$C]["null"])$gd[0]='('.lang(5).')';$y=$wc[$C];$t--;echo"<div>".h($Za)."<input type='hidden' name='where[$t][col]' value='".h($C)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($gd,$Z[$y]["val"],true)."</select></div>\n";unset($h[$C]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(32).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."' onsearch='selectSearchSearch(this);'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($h,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($id,$h,$w){$jd=array();foreach($w
as$y=>$v){$id=array();foreach($v["columns"]as$X)$id[]=$h[$X];if(count(array_filter($id,'strlen'))>1&&$y!="PRIMARY")$jd[$y]=implode(", ",$id);}if($jd){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$jd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","50","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($le){}function
selectActionPrint($w){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($ob,$h){if($ob){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($ob)==1?'<input type="hidden" name="email_field" value="'.h(key($ob)).'">':html_select("email_field",$ob)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$w){return
array(array(),array());}function
selectSearchProcess($q,$w){$J=array();foreach((array)$_GET["where"]as$y=>$Z){$Ka=$Z["col"];$cd=$Z["op"];$X=$Z["val"];if(($y<0?"":$Ka).$X!=""){$Pa=array();foreach(($Ka!=""?array($Ka=>$q[$Ka]):$q)as$C=>$p){if($Ka!=""||is_numeric($X)||!ereg('int|float|double|decimal',$p["type"])){$C=idf_escape($C);if($Ka!=""&&$p["type"]=="enum")$Pa[]=(in_array(0,$X)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$X)).")";else{$me=ereg('char|text|enum|set',$p["type"]);$Y=$this->processInput($p,(!$cd&&$me&&ereg('^[^%]+$',$X)?"%$X%":$X));$Pa[]=$C.($Y=="NULL"?" IS".($cd==">="?" NOT":"")." $Y":(in_array($cd,$this->operators)||$cd=="="?" $cd $Y":($me?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$Pa[]="$C IS NULL";}}}$J[]=($Pa?"(".implode(" OR ",$Pa).")":"0");}}return$J;}function
selectOrderProcess($q,$w){$mc=$_GET["index_order"];if($mc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($mc!=""?array($w[$mc]):$w)as$v){if($mc!=""||$v["type"]=="INDEX"){$bc=array_filter($v["descs"]);$Za=false;foreach($v["columns"]as$X){if(ereg('date|timestamp',$q[$X]["type"])){$Za=true;break;}}$J=array();foreach($v["columns"]as$y=>$X)$J[]=idf_escape($X).(($bc?$v["descs"][$y]:$Za)?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Ob){if($_POST["email_append"])return
true;if($_POST["email"]){$Rd=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$de=$_POST["email_subject"];$Pc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$de.$Pc",$Jc);$L=get_rows("SELECT DISTINCT $p".($Jc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Jc[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Ob)as$K){$Gd=array('{\\'=>'{');foreach($Jc[1]as$X)$Gd['{$'."$X}"]=$this->editVal($K[$X],$q[$X]);$nb=$K[$_POST["email_field"]];if(is_mail($nb)&&send_mail($nb,strtr($de,$Gd),strtr($Pc,$Gd),$_POST["email_from"],$_FILES["email_files"]))$Rd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Rd));}return
false;}function
selectQueryBuild($M,$Z,$Xb,$id,$z,$E){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($p){$J=array();if($p["null"]&&ereg('blob',$p["type"]))$J["NULL"]=lang(5);$J[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(ereg('date|time',$p["type"]))$J["now"]=lang(44);if(eregi('_(md5|sha1)$',$p["field"],$A))$J[]=strtolower($A[1]);return$J;}function
editInput($Q,$p,$sa,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$sa value='-1' checked><i>".lang(6)."</i></label> ":"").enum_input("radio",$sa,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$gd=$this->_foreignKeyOptions($Q,$p["field"],$Y);if($gd!==null)return(is_array($gd)?"<select$sa>".optionlist($gd,$Y,true)."</select>":"<input value='".h($Y)."'$sa class='hidden'><input value='".h($gd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$sa>";$ec="";if(ereg('time',$p["type"]))$ec=lang(45);if(ereg('date|timestamp',$p["type"]))$ec=lang(46).($ec?" [$ec]":"");if($ec)return"<input value='".h($Y)."'$sa> ($ec)";if(eregi('_(md5|sha1)$',$p["field"]))return"<input type='password' value='".h($Y)."'$sa>";return'';}function
processInput($p,$Y,$s=""){if($s=="now")return"$s()";$J=$Y;if(ereg('date|timestamp',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$A))$J=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$J=($p["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$J:q($J));if($Y==""&&like_bool($p))$J="0";elseif($Y==""&&($p["null"]||!ereg('char|text',$p["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$s))$J="$s($J)";return
unconvert_field($p,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($n){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$ce,$H){global$j;$I=$j->query($H,1);if($I){while($K=$I->fetch_assoc()){if($ce=="table"){dump_csv(array_keys($K));$ce="INSERT";}dump_csv($K);}}}function
dumpFilename($ic){return
friendly_url($ic);}function
dumpHeaders($ic,$Tc=false){$Ab="csv";header("Content-Type: text/csv; charset=utf-8");return$Ab;}function
homepage(){return
true;}function
navigation($Sc){global$ba,$ue;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'
</h1>
';if($Sc=="auth"){$Kb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$F){if($F!==null){if($Kb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Kb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(5)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(47),'" id="logout">
<input type="hidden" name="token" value="',$ue,'">
</p>
</form>
';$this->databasesPrint($Sc);if($Sc!="db"&&$Sc!="ns"){$R=table_status('',true);if(!$R)echo"<p class='message'>".lang(7)."\n";else$this->tablesPrint($R);}}}function
databasesPrint($Sc){}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$K){$C=$this->tableName($K);if(isset($K["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"]||$_GET["edit"]==$K["Name"])." title='".lang(48)."'>$C</a><br>\n";}}function
_foreignColumn($Ob,$g){foreach((array)$Ob[$g]as$Nb){if(count($Nb["source"])==1){$C=$this->rowDescription($Nb["table"]);if($C!=""){$hc=idf_escape($Nb["target"][0]);return
array($Nb["table"],$hc,$C);}}}}function
_foreignKeyOptions($Q,$g,$Y=null){global$j;if(list($T,$hc,$C)=$this->_foreignColumn(column_foreign_keys($Q),$g)){$J=&$this->_values[$T];if($J===null){$R=table_status($T);$J=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $hc, $C FROM ".table($T)." ORDER BY 2"));}if(!$J&&$Y!==null)return$j->result("SELECT $C FROM ".table($T)." WHERE $hc = ".q($Y));return$J;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($pe,$o="",$Da=array(),$qe=""){global$a,$c,$j,$gb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$re=$pe.($qe!=""?": ".h($qe):"");$se=strip_tags($re.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE html>
<html lang="',$a,'" dir="',lang(49),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$se,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.7.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.1",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(49),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($j)?substr($j->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Da!==null){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$gb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(50));if($Da===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Da)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Da)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Da
as$y=>$X){$Za=(is_array($X)?$X[1]:$X);if($Za!="")echo'<a href="'.h(ME."$y=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Za).'</a> &raquo; ';}}echo"$pe\n";}}echo"<h2>$re</h2>\n";restart_session();$Ke=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Qc=$_SESSION["messages"][$Ke];if($Qc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Qc)."</div>\n";unset($_SESSION["messages"][$Ke]);}$m=&get_session("dbs");if(DB!=""&&$m&&!in_array(DB,$m,true))$m=null;stop_session();if($o)echo"<div class='error'>$o</div>\n";define("PAGE_HEADER",1);}function
page_footer($Sc=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Sc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($W,$Se){$Md='';foreach($W
as$X)$Md.=pack('V',$X);if($Se)return
substr($Md,0,end($W));return$Md;}function
str2long($Md,$Se){$W=array_values(unpack('V*',str_pad($Md,4*ceil(strlen($Md)/4),"\0")));if($Se)$W[]=strlen($Md);return$W;}function
xxtea_mx($Xe,$We,$fe,$uc){return
int32((($Xe>>5&0x7FFFFFF)^$We<<2)+(($We>>3&0x1FFFFFFF)^$Xe<<4))^int32(($fe^$We)+($uc^$Xe));}function
encrypt_string($ae,$y){if($ae=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($ae,true);$B=count($W)-1;$Xe=$W[$B];$We=$W[0];$zd=floor(6+52/($B+1));$fe=0;while($zd-->0){$fe=int32($fe+0x9E3779B9);$jb=$fe>>2&3;for($md=0;$md<$B;$md++){$We=$W[$md+1];$Uc=xxtea_mx($Xe,$We,$fe,$y[$md&3^$jb]);$Xe=int32($W[$md]+$Uc);$W[$md]=$Xe;}$We=$W[0];$Uc=xxtea_mx($Xe,$We,$fe,$y[$md&3^$jb]);$Xe=int32($W[$B]+$Uc);$W[$B]=$Xe;}return
long2str($W,false);}function
decrypt_string($ae,$y){if($ae=="")return"";if(!$y)return
false;$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($ae,false);$B=count($W)-1;$Xe=$W[$B];$We=$W[0];$zd=floor(6+52/($B+1));$fe=int32($zd*0x9E3779B9);while($fe){$jb=$fe>>2&3;for($md=$B;$md>0;$md--){$Xe=$W[$md-1];$Uc=xxtea_mx($Xe,$We,$fe,$y[$md&3^$jb]);$We=int32($W[$md]-$Uc);$W[$md]=$We;}$Xe=$W[$B];$Uc=xxtea_mx($Xe,$We,$fe,$y[$md&3^$jb]);$We=int32($W[0]-$Uc);$W[0]=$We;$fe=int32($fe-0x9E3779B9);}return
long2str($W,true);}$j='';$ue=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$qd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$qd[$y]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];$_SESSION["db"][$e["driver"]][$e["server"]][$e["username"]][$e["db"]]=true;if($e["permanent"]){$y=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"])."-".base64_encode($e["db"]);$wd=$c->permanentLogin(true);$qd[$y]="$y:".base64_encode($wd?encrypt_string($e["password"],$wd):"");cookie("adminer_permanent",implode(" ",$qd));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($ue&&$_POST["token"]!=$ue){page_header(lang(47),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($qd&&!$_SESSION["pwds"]){session_regenerate_id();$wd=$c->permanentLogin();foreach($qd
as$y=>$X){list(,$Ga)=explode(":",$X);list($fb,$N,$V,$n)=array_map('base64_decode',explode("-",$y));$_SESSION["pwds"][$fb][$N][$V]=decrypt_string(base64_decode($Ga),$wd);$_SESSION["db"][$fb][$N][$V][$n]=true;}}function
unset_permanent(){global$qd;foreach($qd
as$y=>$X){list($fb,$N,$V,$n)=array_map('base64_decode',explode("-",$y));if($fb==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$n==DB)unset($qd[$y]);}cookie("adminer_permanent",implode(" ",$qd));}function
auth_error($yb=null){global$j,$c,$ue;$Ud=session_name();$o="";if(!$_COOKIE[$Ud]&&$_GET[$Ud]&&ini_bool("session.use_only_cookies"))$o=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Ud]||$_GET[$Ud])&&!$ue)$o=lang(54);else{$F=&get_session("pwds");if($F!==null){$o=h($yb?$yb->getMessage():(is_string($j)?$j:lang(55)));if($F===false)$o.='<br>'.lang(56,'<code>permanentLogin()</code>');$F=null;}unset_permanent();}}page_header(lang(24),$o,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(57),lang(58,implode(", ",$td)),false);page_footer("auth");exit;}$j=connect();}if(is_string($j)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$ue=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$ue;$o='';if($_POST){if($_POST["token"]!=$ue){$qc="max_input_vars";$Nc=ini_get($qc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$Nc||$X<$Nc)){$qc=$y;$Nc=$X;}}}$o=(!$_POST["token"]&&$Nc?lang(59,"'$qc'"):lang(51));}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$o=lang(60,"'post_max_size'");if(isset($_GET["sql"]))$o.=' '.lang(61);}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$j->select_db($c->database());function
email_header($cc){return"=?UTF-8?B?".base64_encode($cc)."?=";}function
send_mail($nb,$de,$Pc,$Ub="",$Ib=array()){$ub=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Pc=str_replace("\n",$ub,wordwrap(str_replace("\r","","$Pc\n")));$Ca=uniqid("boundary");$ra="";foreach((array)$Ib["error"]as$y=>$X){if(!$X)$ra.="--$Ca$ub"."Content-Type: ".str_replace("\n","",$Ib["type"][$y]).$ub."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Ib["name"][$y])."\"$ub"."Content-Transfer-Encoding: base64$ub$ub".chunk_split(base64_encode(file_get_contents($Ib["tmp_name"][$y])),76,$ub).$ub;}$za="";$dc="Content-Type: text/plain; charset=utf-8$ub"."Content-Transfer-Encoding: 8bit";if($ra){$ra.="--$Ca--$ub";$za="--$Ca$ub$dc$ub$ub";$dc="Content-Type: multipart/mixed; boundary=\"$Ca\"";}$dc.=$ub."MIME-Version: 1.0$ub"."X-Mailer: Adminer Editor".($Ub?$ub."From: ".str_replace("\n","",$Ub):"");return
mail($nb,email_header($de),$za.$Pc.$ra,$dc);}function
like_bool($p){return
ereg("bool|(tinyint|bit)\\(1\\)",$p["full_type"]);}$Zc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$gb[DRIVER]=lang(24);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];$q=fields($b);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$j->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET,$q),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$q=fields($b);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$q):""):where($_GET,$q));$Je=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($q
as$C=>$p){if(!isset($p["privileges"][$Je?"update":"insert"])||$c->fieldName($p)=="")unset($q[$C]);}if($_POST&&!$o&&!isset($_GET["select"])){$Fc=$_POST["referer"];if($_POST["insert"])$Fc=($Je?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$Fc))$Fc=ME."select=".urlencode($b);$w=indexes($b);$Ee=unique_array($_GET["where"],$w);$Ad="\nWHERE $Z";if(isset($_POST["delete"])){$H="FROM ".table($b);query_redirect("DELETE".($Ee?" $H$Ad":limit1($H,$Ad)),$Fc,lang(62));}else{$O=array();foreach($q
as$C=>$p){$X=process_input($p);if($X!==false&&$X!==null)$O[idf_escape($C)]=($Je?"\n".idf_escape($C)." = $X":$X);}if($Je){if(!$O)redirect($Fc);$H=table($b)." SET".implode(",",$O);query_redirect("UPDATE".($Ee?" $H$Ad":limit1($H,$Ad)),$Fc,lang(63));}else{$I=insert_into($b,$O);$Bc=($I?last_id():0);queries_redirect($Fc,lang(64,($Bc?" $Bc":"")),$I);}}}$ie=$c->tableName(table_status1($b,true));page_header(($Je?lang(65):lang(40)),$o,array("select"=>array($b,$ie)),$ie);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($q
as$C=>$p){if(isset($p["privileges"]["select"])){$pa=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$pa="''";if($x=="sql"&&ereg("enum|set",$p["type"]))$pa="1*".idf_escape($C);$M[]=($pa?"$pa AS ":"").idf_escape($C);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".lang(66)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$q)echo"<p class='error'>".lang(67)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$C=>$p){echo"<tr><th>".$c->fieldName($p);$Ya=$_GET["set"][bracket_escape($C)];if($Ya===null){$Ya=$p["default"];if($p["type"]=="bit"&&ereg("^b'([01]*)'\$",$Ya,$Dd))$Ya=$Dd[1];}$Y=($K!==null?($K[$C]!=""&&$x=="sql"&&ereg("enum|set",$p["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Je&&$p["auto_increment"]?"":(isset($_GET["select"])?false:$Ya)));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$p);$s=($_POST["save"]?(string)$_POST["function"][$C]:($Je&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(ereg("time",$p["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}input($p,$Y,$s);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(68)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Je?lang(69):lang(70))."' title='Ctrl+Shift+Enter'>\n";}echo($Je?"<input type='submit' name='delete' value='".lang(71)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ue,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$R=table_status1($b);$w=indexes($b);$q=fields($b);$Pb=column_foreign_keys($b);$Yc="";if($R["Oid"]){$Yc=($x=="sqlite"?"rowid":"oid");$w[]=array("type"=>"PRIMARY","columns"=>array($Yc));}parse_str($_COOKIE["adminer_import"],$ka);$Kd=array();$h=array();$le=null;foreach($q
as$y=>$p){$C=$c->fieldName($p);if(isset($p["privileges"]["select"])&&$C!=""){$h[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($p))$le=$c->selectLengthProcess();}$Kd+=$p["privileges"];}list($M,$Xb)=$c->selectColumnsProcess($h,$w);$tc=count($Xb)<count($M);$Z=$c->selectSearchProcess($q,$w);$id=$c->selectOrderProcess($q,$w);$z=$c->selectLimitProcess();$Ub=($M?implode(", ",$M):"*".($Yc?", $Yc":"")).convert_fields($h,$q,$M)."\nFROM ".table($b);$Yb=($Xb&&$tc?"\nGROUP BY ".implode(", ",$Xb):"").($id?"\nORDER BY ".implode(", ",$id):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Fe=>$K){$pa=convert_field($q[key($K)]);echo$j->result("SELECT".limit($pa?$pa:idf_escape(key($K))." FROM ".table($b)," WHERE ".where_check($Fe,$q).($Z?" AND ".implode(" AND ",$Z):"").($id?" ORDER BY ".implode(", ",$id):""),1));}exit;}if($_POST&&!$o){$Ue=$Z;if(is_array($_POST["check"]))$Ue[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Ue=($Ue?"\nWHERE ".implode(" AND ",$Ue):"");$ud=$He=null;foreach($w
as$v){if($v["type"]=="PRIMARY"){$ud=array_flip($v["columns"]);$He=($M?$ud:array());break;}}foreach((array)$He
as$y=>$X){if(in_array(idf_escape($y),$M))unset($He[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$He===array())$H="SELECT $Ub$Ue$Yb";else{$De=array();foreach($_POST["check"]as$X)$De[]="(SELECT".limit($Ub,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q).$Yb,1).")";$H=implode(" UNION ALL ",$De);}$c->dumpData($b,"table",$H);exit;}if(!$c->selectEmailProcess($Z,$Pb)){if($_POST["save"]||$_POST["delete"]){$I=true;$la=0;$H=table($b);$O=array();if(!$_POST["delete"]){foreach($h
as$C=>$X){$X=process_input($q[$C]);if($X!==null){if($_POST["clone"])$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));elseif($X!==false)$O[]=idf_escape($C)." = $X";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($b):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Na="UPDATE";if($_POST["delete"]){$Na="DELETE";$H="FROM $H";}if($_POST["clone"]){$Na="INSERT";$H="INTO $H";}if($_POST["all"]||($He===array()&&is_array($_POST["check"]))||$tc){$I=queries("$Na $H$Ue");$la=$j->affected_rows;}else{foreach((array)$_POST["check"]as$X){$I=queries($Na.limit1($H,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q)));if(!$I)break;$la+=$j->affected_rows;}}}$Pc=lang(72,$la);if($_POST["clone"]&&$I&&$la==1){$Bc=last_id();if($Bc)$Pc=lang(64," $Bc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Pc,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(73);else{$I=true;$la=0;foreach($_POST["val"]as$Fe=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$H=table($b)." SET ".implode(", ",$O);$Te=" WHERE ".where_check($Fe,$q).($Z?" AND ".implode(" AND ",$Z):"");$I=queries("UPDATE".($tc||$He===array()?" $H$Te":limit1($H,$Te)));if(!$I)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(72,$la),$I);}}elseif(!is_string($Gb=get_file("csv_file",true)))$o=upload_error($Gb);elseif(!preg_match('~~u',$Gb))$o=lang(74);else{cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$I=true;$Ma=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Gb,$Jc);$la=count($Jc[0]);begin();$Sd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Jc[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Sd]*)$Sd~",$X.$Sd,$Kc);if(!$y&&!array_diff($Kc[1],$Ma)){$Ma=$Kc[1];$la--;}else{$O=array();foreach($Kc[1]as$t=>$Ka)$O[idf_escape($Ma[$t])]=($Ka==""&&$q[$Ma[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ka))));$I=insert_update($b,$O,$ud);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(75,$la),$I);queries("ROLLBACK");}}}$ie=$c->tableName($R);if(is_ajax())ob_start();page_header(lang(36).": $ie",$o);$O=null;if(isset($Kd["insert"])){$O="";foreach((array)$_GET["where"]as$X){if(count($Pb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($R,$O);if(!$h)echo"<p class='error'>".lang(76).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($M,$h);$c->selectSearchPrint($Z,$h,$w);$c->selectOrderPrint($id,$h,$w);$c->selectLimitPrint($z);$c->selectLengthPrint($le);$c->selectActionPrint($w);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Sb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$E=floor(max(0,$Sb-1)/$z);}$H=$c->selectQueryBuild($M,$Z,$Xb,$id,$z,$E);if(!$H)$H="SELECT".limit((+$z&&$Xb&&$tc&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ub,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Yb,($z!=""?+$z:null),($E?$z*$E:0),"\n");echo$c->selectQuery($H);$I=$j->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($x=="mssql"&&$E)$I->seek($z*$E);$pb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$x=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$Sb=(+$z&&$Xb&&$tc?($x=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".lang(66)."\n";else{$ya=$c->backwardKeys($b,$ie);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Xb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(77)."</a>");$Vc=array();$Wb=array();reset($M);$Bd=1;foreach($L[0]as$y=>$X){if($y!=$Yc){$X=$_GET["columns"][key($M)];$p=$q[$M?($X?$X["col"]:current($M)):$y];$C=($p?$c->fieldName($p,$Bd):"*");if($C!=""){$Bd++;$Vc[$y]=$C;$g=idf_escape($y);$gc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Za="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($gc.($id[0]==$g||$id[0]==$y||(!$id&&$tc&&$Xb[0]==$g)?$Za:'')).'">';echo(!$M||$X?apply_sql_function($X["fun"],$C):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($gc.$Za)."' title='".lang(78)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Wb[$y]=$X["fun"];next($M);}}$Ec=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$Ec[$y]=max($Ec[$y],min(40,strlen(utf8_decode($X))));}}echo($ya?"<th>".lang(79):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($c->rowDescriptions($L,$Pb)as$B=>$K){$Ee=unique_array($L[$B],$w);if(!$Ee){$Ee=array();foreach($L[$B]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$Ee[$y]=$X;}}$Fe="";foreach($Ee
as$y=>$X){if(strlen($X)>64){$y="MD5(".(strpos($y,'(')?$y:idf_escape($y)).")";$X=md5($X);}$Fe.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$Xb&&$M?"":"<td>".checkbox("check[]",substr($Fe,1),in_array(substr($Fe,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($tc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$Fe)."'>".lang(77)."</a>"));foreach($K
as$y=>$X){if(isset($Vc[$y])){$p=$q[$y];if($X!=""&&(!isset($pb[$y])||$pb[$y]!=""))$pb[$y]=(is_mail($X)?$Vc[$y]:"");$_="";$X=$c->editVal($X,$p);if($X!==null){if(ereg('blob|bytea|raw|file',$p["type"])&&$X!="")$_=ME.'download='.urlencode($b).'&field='.urlencode($y).$Fe;if($X==="")$X="&nbsp;";elseif($le!=""&&is_shortable($p))$X=shorten_utf8($X,max(0,+$le));else$X=h($X);if(!$_){foreach((array)$Pb[$y]as$r){if(count($Pb[$y])==1||end($r["source"])==$y){$_="";foreach($r["source"]as$t=>$Vd)$_.=where_link($t,$r["target"][$t],$L[$B][$Vd]);$_=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$_;if(count($r["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($b);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Ee))$_.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($Ee
as$uc=>$W)$_.=where_link($t++,$uc,$W);}}if(!$_&&($_=$c->selectLink($K[$y],$p))===null){if(is_mail($K[$y]))$_="mailto:$K[$y]";if($yd=is_url($K[$y]))$_=($yd=="http"&&$aa?$K[$y]:"$yd://www.adminer.org/redirect/?url=".urlencode($K[$y]));}$hc=h("val[$Fe][".bracket_escape($y)."]");$Y=$_POST["val"][$Fe][bracket_escape($y)];$ac=h($Y!==null?$Y:$K[$y]);$Hc=strpos($X,"<i>...</i>");$lb=is_utf8($X)&&$L[$B][$y]==$K[$y]&&!$Wb[$y];$ke=ereg('text|lob',$p["type"]);echo(($_GET["modify"]&&$lb)||$Y!==null?"<td>".($ke?"<textarea name='$hc' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$ac</textarea>":"<input name='$hc' value='$ac' size='$Ec[$y]'>"):"<td id='$hc' onclick=\"selectClick(this, event, ".($Hc?2:($ke?1:0)).($lb?"":", '".h(lang(80))."'").");\">".$c->selectVal($X,$_,$p));}}if($ya)echo"<td>";$c->backwardKeysPrint($ya,$L[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Xb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$E)&&!is_ajax()){$xb=true;if($_GET["page"]!="last"&&+$z&&!$tc&&($Sb>=$z||$E)){$Sb=found_rows($R,$Z);if($Sb<max(1e4,2*($E+1)*$z))$Sb=reset(slow_query("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):"")));else$xb=false;}if(+$z&&($Sb===false||$Sb>$z||$E)){echo"<p class='pages'>";$Lc=($Sb===false?$E+(count($L)>=$z?2:1):floor(($Sb-1)/$z));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(81)."', '".($E+1)."'), event); return false;\">".lang(81)."</a>:",pagination(0,$E).($E>5?" ...":"");for($t=max(1,$E-4);$t<min($Lc,$E+5);$t++)echo
pagination($t,$E);if($Lc>0){echo($E+5<$Lc?" ...":""),($xb&&$Sb!==false?pagination($Lc,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Lc'>".lang(82)."</a>");}echo(($Sb===false?count($L)+1:$Sb-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(83).'\');">'.lang(84).'</a>':'');}echo"<p>\n",($Sb!==false?"(".($xb?"":"~ ").lang(85,$Sb).") ":""),checkbox("all",1,0,lang(86))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(65),'</legend><div>
<input type="submit" value="',lang(68),'"',($_GET["modify"]?'':' title="'.lang(73).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(65),'">
<input type="submit" name="clone" value="',lang(87),'">
<input type="submit" name="delete" value="',lang(71),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Sb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Qb=$c->dumpFormat();foreach((array)$_GET["columns"]as$g){if($g["fun"]){unset($Qb['sql']);break;}}if($Qb){print_fieldset("export",lang(88));$ld=$c->dumpOutput();echo($ld?html_select("output",$ld,$ka["output"])." ":""),html_select("format",$Qb,$ka["format"])," <input type='submit' name='export' value='".lang(88)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(89),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(89)."'>","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($pb,'strlen'),$h);echo"<p><input type='hidden' name='token' value='$ue'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$j->query("KILL ".(+$_POST["kill"]));elseif(list($Q,$hc,$C)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$z=11;$I=$j->query("SELECT $hc, $C FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$hc = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $z");for($t=1;($K=$I->fetch_row())&&$t<$z;$t++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($hc))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($K)echo"...\n";}exit;}else{page_header(lang(50),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(90).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(91).'<td>'.lang(92)."</thead>\n";foreach(table_status()as$Q=>$K){$C=$c->tableName($K);if(isset($K["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$C</a>";$X=number_format($K["Rows"],0,'.',lang(8));echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($K["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();