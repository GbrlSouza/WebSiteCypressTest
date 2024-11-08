describe('Página Inicial', () => {
  beforeEach(() => { cy.visit('http://localhost/WebSiteCypressTest/index.php') })

  it('deve exibir o título correto', () => {
    cy.title()
      .should('eq', 'Site Simples com MySQL')
  })

  it('deve carregar a lista de usuários', () => {
    cy.get('ul.list-group')
      .find('li')
      .should('exist')
    })

  it('deve exibir o botão "Adicionar Novo Usuário"', () => {
    cy.get('a.btn-primary')
      .should('contain', 'Adicionar Novo Usuário')
    })

  it('deve redirecionar para a página de adicionar usuário ao clicar no botão', () => {
    cy.get('a.btn-primary')
      .click()

    cy.url()
      .should('include', 'add_user.php')
  })
})