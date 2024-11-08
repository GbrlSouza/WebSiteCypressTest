describe('Adicionar Usuário', () => {
  beforeEach(() => { cy.visit('http://localhost/WebSiteCypressTest/add_user.php') })

  it('deve exibir o formulário de adição de usuário', () => {
    cy.get('form')
      .should('exist')

    cy.get('input#nome')
      .should('exist')

    cy.get('input#email')
      .should('exist')
  })

  it('deve adicionar um usuário com informações válidas', () => {
    cy.get('input#nome')
      .type('João da Silva')

    cy.get('input#email')
      .type('joao.silva@example.com')

    cy.get('button[type="submit"]')
      .click()

    cy.url()
      .should('include', 'index.php')

    cy.contains('li.list-group-item', 'João da Silva - joao.silva@example.com')
      .should('exist')
  })

  it('não deve permitir adicionar um usuário com email duplicado', () => {
    cy.get('input#nome')
      .type('Maria Santos')

    cy.get('input#email')
      .type('joao.silva@example.com')

    cy.get('button[type="submit"]')
      .click()

    cy.contains('Erro ao adicionar usuário.')
      .should('exist')
  })
})