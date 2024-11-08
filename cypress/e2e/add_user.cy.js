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
    const ran = Math.floor(Math.random() * 1000)
    const randomName = `Usuário ${ran}`
    const randomEmail = `usuario${ran}@email.com`

    cy.get('input#nome')
      .type(randomName)

    cy.get('input#email')
      .type(randomEmail)

    cy.get('button[type="submit"]')
      .click()

    cy.url()
      .should('include', 'index.php')

    cy.contains('li.list-group-item', `${randomName} - ${randomEmail}`)
      .should('exist')
  })

  it('não deve permitir adicionar um usuário com email duplicado', () => {
    const existingEmail = 'usuario.duplicado@example.com'

    cy.get('input#nome')
      .type('Nome Inicial')

    cy.get('input#email')
      .type(existingEmail)

    cy.get('button[type="submit"]')
      .click()

    cy.visit('http://localhost/WebSiteCypressTest/add_user.php')

    cy.get('input#nome')
      .type('Nome Repetido')

    cy.get('input#email')
      .type(existingEmail)

    cy.get('button[type="submit"]')
      .click()

    cy.contains('Erro ao adicionar usuário.')
      .should('exist')
  })
})
