import { startStimulusApp } from '@symfony/stimulus-bundle';
import RevealController from '@stimulus-components/reveal'

const app = startStimulusApp();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

app.register('reveal', RevealController)
