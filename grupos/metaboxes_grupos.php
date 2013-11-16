<div class="my_meta_control">
	
	    
    <div id="campo_meta">
    <label>Site do Grupo</label>
    <p>
		<input type="text" name="_my_meta[ag_site]" value="<?php if(!empty($meta['ag_site'])) echo $meta['ag_site']; ?>"/>
		<span>Coloque o endere&ccedil;o (URL) do site (com http://)</span>
	</p>
    </div>
    
	<div id="campo_meta">
    <label>Grupo no FaceBook</label>
	<p>
		<input type="text" name="_my_meta[ag_face]" value="<?php if(!empty($meta['ag_face'])) echo $meta['ag_face']; ?>"/>
		<span>Coloque o endere&ccedil;o (URL) no FaceBook (com http://)</span>
	</p>
    </div>
	
	<div id="campo_meta">
    <label>E-mail Oficial</label>
	<p>
		<input type="text" name="_my_meta[ag_email]" value="<?php if(!empty($meta['ag_email'])) echo $meta['ag_email']; ?>"/>
		<span>Coloque o e-mail de contato do Grupo ou A&ccedil;ao</span>
	</p>
    </div>
	
	
	<div id="campo_meta">
    <label>Integrantes</label>
	<p>
		<input type="text" name="_my_meta[ag_integrantes]" value="<?php if(!empty($meta['ag_integrantes'])) echo $meta['ag_integrantes']; ?>"/>
		<span>Coloque a quantidade atual de integrantes do Grupo ou A&ccedil;ao</span>
	</p>
    </div>
	
    <div id="hack-meta"></div>  
	
</div>