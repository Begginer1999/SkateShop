


							<li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Minha Conta <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
								<!-- Botão 1 - Login-->
								<button type="button" class="btn btn-primary btn-block"
			                			data-toggle="modal" data-target="#window">
			            			Logar
			        			</button>

			        			<!--Botão 2 - Cadastro -->
						        <button type="button" class="btn btn-primary btn-block"
						                data-toggle="modal" data-target="#janela">
						            Cadastre-se
						        </button>
			    			</ul>
			    		</li>
			    	<!-- Modal window 1 - Login-->

		        <form class="modal fade" id="window">
		            <div class="modal-dialog">
		                <div class="modal-content">
		                    <!-- Header (cabeçalho) -->
		                    <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal">
		                            <span>&times;</span>
		                        </button>
		                        <h4 class="modal-tittle"><b>Efetuar login</b></h4>
		                    </div>

		                    <!-- Body (corpo) -->
		                    <div class="modal-body">
		                        <div class="form-group">
		                            <input type="email" class="form-control" id="email" 
		                                    placeholder="Digite seu email">
		                        </div>

		                        <div class="form-group">
		                            <input type="password" class="form-control" id="senha" 
		                                    placeholder="Digite sua senha">
		                        </div>
		                    </div>

		                    <!-- Footer (rodapé) -->
		                    <div class="modal-footer">
		                        <button type="submit" class="btn btn-primary btn-block">
		                            Logar
		                        </button>

		                        <button type="button" class="btn btn-warning btn-block" data-dismiss="modal">
		                            Cancelar
		                        </button>
		                    </div>
		                </div>
		            </div>
		        </form>

		        	
        <!-- Modal window 2 - Cadastro-->

		        <form class="modal fade" id="janela">
		            
		            <div class="modal-dialog">
		                <div class="modal-content">
		                    <!-- Header (cabeçalho) -->
		                    <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal">
		                            <span>&times;</span>
		                        </button>
		                        <h4 class="modal-tittle"><b>Efetuar cadastro</b></h4>
		                    </div>

		                    <!-- Body (corpo) -->
		                    <div class="modal-body">
		                        <div class="form-group">
		                        	<label for="email-lbl">Email</label>
		                            <input type="email" id="email-lbl" class="form-control"  
		                                    placeholder="Digite seu email">
		                            <small id="infomail" class="form-text text-muted">
										Nós nunca iremos compartilhar seu email com qualquer outra pessoa
									</small>
		                        </div>

		                        <div class="form-group">
		                        	<label for="senha-lbl">Senha</label>
		                            <input type="password" id="senha-lbl" class="form-control" 
		                                    placeholder="Digite sua senha">
		                        </div>

							    <div class="form-group">
									<label for="dtnasc">Data de nascimento</label>
									<input type="date" id="dtnasc" class="form-control">
								</div>
		                    </div>

		                    <!-- Footer (rodapé) -->
		                    <div class="modal-footer">
		                        <button type="submit" class="btn btn-primary btn-block">
		                            Cadastrar
		                        </button>

		                        <button type="button" class="btn btn-warning btn-block" data-dismiss="modal">
		                            Cancelar
		                        </button>

		                    </div>
		                </div>
		            </div>
		         </form>