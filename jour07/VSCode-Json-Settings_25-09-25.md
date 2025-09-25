# Code VS Code Settings Json à ce jour : 25.09.2025

```json
{
  // Configuration PHP & Laragon
  "php.validate.executablePath": "C:\\laragon\\bin\\php\\php-8.1.10-Win32-vs16-x64\\php-win.exe",
  "php.validate.enable": true,
  "php.validate.run": "onType",
  "php.suggest.basic": false,

  // Configuration Intelephense
  "intelephense.environment.phpVersion": "8.1.10",
  "intelephense.files.maxSize": 5000000,
  "intelephense.files.associations": ["*.php", "*.phtml"],
  "intelephense.completion.insertUseDeclaration": true,
  "intelephense.completion.fullyQualifyGlobalConstantsAndFunctions": false,
  "intelephense.format.enable": true,
  "intelephense.diagnostics.enable": true,
  "intelephense.trace.server": "off",

  // Configuration PHPCS
  "phpcs.executablePath": "C:\\Users\\Hp\\AppData\\Roaming\\Composer\\vendor\\bin\\phpcs.bat",
  "phpcs.standard": "PSR12",
  "phpcs.trigger": "onType",
  "phpcs.ignorePatterns": ["vendor/*", "node_modules/*", "storage/*", "bootstrap/cache/*"],
  "phpcs.showSources": true,
  "phpcs.showWarnings": true,

  // Configuration générale de l'éditeur
  "editor.formatOnSave": true,
  "files.autoSave": "onFocusChange",
  "editor.tabSize": 4,
  "editor.detectIndentation": false,
  "editor.trimAutoWhitespace": true,
  "editor.cursorBlinking": "phase",
  "editor.renderWhitespace": "boundary",
  "editor.codeActionsOnSave": {
    "source.fixAll": true,
    "source.organizeImports": true
  },

  // Configuration Prettier
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "prettier.bracketSameLine": true,
  "prettier.singleQuote": true,
  "prettier.semi": true,
  "prettier.trailingComma": "es5",
  "prettier.printWidth": 100,

  // Configuration spécifique par langage
  "[php]": {
    "editor.defaultFormatter": "bmewburn.vscode-intelephense-client",
    "editor.formatOnSave": true,
    "editor.codeActionsOnSave": {
      "source.fixAll.phpcs": true
    }
  },
  "[blade]": {
    "editor.defaultFormatter": "shufo.vscode-blade-formatter",
    "editor.formatOnSave": true
  },
  "[javascript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[typescript]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[json]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[html]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[css]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[scss]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "[vue]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },

  // Configuration Blade (pour Laravel)
  "blade.format.enable": true,
  "blade.format.indentSize": 4,

  // Exclusion de fichiers pour de meilleures performances
  "files.exclude": {
    "**/vendor": true,
    "**/node_modules": true,
    "**/.git": true,
    "**/storage/logs": true,
    "**/bootstrap/cache": true,
    "**/.phpunit.result.cache": true
  },

  // Configuration de surveillance des fichiers
  "files.watcherExclude": {
    "**/vendor/**": true,
    "**/node_modules/**": true,
    "**/storage/logs/**": true,
    "**/bootstrap/cache/**": true
  },

  // Configuration Copilot (désactivé selon vos préférences)
  "editor.inlineSuggest.enabled": false,
  "editor.inlineSuggest.edits.allowCodeShifting": "never",
  "editor.inlineSuggest.edits.renderSideBySide": "never",
  "editor.inlineSuggest.edits.showCollapsed": true,
  "github.copilot.nextEditSuggestions.enabled": false,
  "github.copilot.nextEditSuggestions.allowWhitespaceOnlyChanges": false,
  "github.copilot.nextEditSuggestions.fixes": false,

  // Configuration des suggestions et de l'autocomplétion
  "editor.quickSuggestions": {
    "other": true,
    "comments": false,
    "strings": true
  },
  "editor.acceptSuggestionOnEnter": "on",
  "editor.snippetSuggestions": "top",

  // Configuration de l'interface
  "explorer.confirmDelete": false,
  "explorer.confirmDragAndDrop": false,
  "workbench.startupEditor": "none",
  "editor.minimap.enabled": true,
  "editor.wordWrap": "on",
  "editor.lineNumbers": "on",
  "editor.rulers": [80, 120],

  // Configuration Terminal (optionnel pour Laragon)
  "terminal.integrated.defaultProfile.windows": "Command Prompt",
  "terminal.integrated.cwd": "${workspaceFolder}",
  "terminal.integrated.shellIntegration.enabled": true,

  // Configuration Git (optionnelle mais utile)
  "git.enableSmartCommit": true,
  "git.confirmSync": false,
  "git.autofetch": true
}
```
