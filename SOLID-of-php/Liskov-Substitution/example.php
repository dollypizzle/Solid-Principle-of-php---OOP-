abstract class MusicalInstrument
    {
        public abstract void PlayANote();
    }
class Piano : MusicalInstrument
    {
        public override void PlayANote()
        {
            PressKey();
        }
        private void PressKey()
        {
            //Press a piano key.
        }
    }
class Saxophone : MusicalInstrument
    {
        public override void PlayANote()
        {
            Blow();
        }
        private void Blow()
        {
            //Blow air into the instrument.
        }
    }