<link href="<?= base_url(); ?>assets/css/aluno.css" rel="stylesheet">

<main class="row col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3 main">
  <div class="col-md-12">
    <h1 class="page-header"> Enviar Solicitação de Matrícula </h1>
  </div>
  <div class="form-control col-md-6">
    <div class="row">
      <div class="col-md-12">
        <label for="nomeProfessor" class="padding"> <h6> Nome do Professor: </h6> </label>
        <input type="text" class="form-control camp" id="nomeProfessor" name="nomeProfessor"
          value="<?= $this->load->library('application/controllers/aluno')->aluno->get_Nome_Professor($solicitacao[0]->idProfessor); ?>" disabled>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="nomeDisciplina" class="padding paddingUp"> <h6> Disciplina Solicitada: </h6> </label>
        <input type="text" class="form-control" id="nomeDisciplina" name="nomeDisciplina" value="<?= $this->load->library('application/controllers/aluno')->aluno->get_Nome_Disciplina($solicitacao[0]->idDisciplina); ?>" disabled>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="justificativa_aluno" class="padding paddingUp"> <h6> Justificativa do Aluno: </h6> </label>
        <textarea class="form-control justificativa" id="justificativa_aluno" name="justificativa_aluno" disabled><?= $solicitacao[0]->justificativa_aluno; ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="status_solicitacao" class="padding paddingUp"> <h6> Status da Solicitação: </h6> </label>
        <select id="status_solicitacao" name="status_solicitacao" class="form-control" disabled>
          <option value="1" <?= $solicitacao[0]->status_solicitacao == 1 ? 'selected':''; ?> > Pendente </option>
          <option value="2" <?= $solicitacao[0]->status_solicitacao == 2 ? 'selected':''; ?> > Aceitar </option>
          <option value="3" <?= $solicitacao[0]->status_solicitacao == 3 ? 'selected':''; ?> > Recusar </option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label for="justificativa_professor" class="padding paddingUp"> <h6> Justificativa do Professor: </h6> </label>
        <textarea class="form-control justificativa" id="justificativa_professor" name="justificativa_professor" disabled><?= $solicitacao[0]->justificativa_professor; ?></textarea>
      </div>
    </div>
    <a class="paddingButton btn btn-danger left" href="<?= base_url(); ?>aluno/matricular_disciplina"> Voltar </a>
  </div>
</div>
</main>
</div>
</div>