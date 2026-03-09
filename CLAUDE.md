# LTS Datapoint — Claude Review Context

## Stack
- Symfony 6.4, PHP 8.x
- MySQL + Doctrine ORM
- Multi-tenant SaaS (TenantContext required on ALL queries)
- Metronic/KeenThemes UI, jQuery, Bootstrap

## Architecture Rules
- Controllers: routing + response only, NO business logic
- Business logic → Handlers
- Data access → Repositories only (never EntityManager in controllers)
- Services use constructor injection

## Entity Conventions
- Naming: Dp* prefix (e.g. DpUser, DpSite)
- No constructors
- No ArrayCollection initializers
- Only getters and setters allowed

## Tenant Isolation (Critical)
- Every query involving tenant data MUST use TenantContext
- Missing tenant filter = Critical issue, blocks merge

## Forbidden in Production
- dd(), dump(), var_dump(), print_r()
- console.log(), debugger
- {{ dump() }} in Twig templates

## Severity Guide
- Critical = blocks merge
- Warning = should fix
- Info = suggestion only
